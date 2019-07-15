<?php
require_once('model/episodemanager.php');
require_once('model/querymanager.php');
require_once('model/loginmanager.php');
require_once('model/commentsmanager.php');
require_once('model/adminmanager.php');

function displayHome()
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->getLastEpisode();
  require("view/frontend/homeview.php");
}

function listEpisode()
{
  $episodeManager = new Episodes();
  $episodes = $episodeManager->getEpisodes();
  require("view/frontend/episodelistview.php");
}

function login()
{
  require("view/frontend/loginview.php");
}

function episode($episodeId)
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->getEpisode($episodeId);
  $commentManager = new Comments();
  $comments = $commentManager->getComments($episodeId);
  require("view/frontend/episodeview.php");
}

function addComment($postId, $pseudo, $comment)
{
  $commentManager = new Comments();
  $commentManager->addComment($postId, $pseudo, $comment);
}

function signalComment($commentId)
{
  $commentManager = new Comments();
  $commentManager->signalComment($commentId);
}

function deleteComment($commentId)
{
  $commentManager = new Comments();
  $commentManager->deleteComment($commentId);
  if ($_SESSION['statut'] == 'admin') {
    $adminManager = new Admin();
    $comments = $adminManager->getComments();
    $episodeManager = new Episodes();
    $episodes = $episodeManager->getEpisodes();
    require("view/backend/adminview.php");
  } else {
    require("view/frontend/loginview.php");
  }
}

function loginUser($userIds)
{
  $loginManager = new Login();
  $login = $loginManager->verifyLogin($userIds);
  if ($login) {
    $adminManager = new Admin();
    $comments = $adminManager->getComments();
    $episodeManager = new Episodes();
    $episodes = $episodeManager->getEpisodes();
    require("view/backend/adminview.php");
  } else {
    require("view/frontend/loginview.php");
  }
}
