<?php
require_once('model/episodemanager.php');
require_once('model/querymanager.php');
require_once('model/loginmanager.php');
require_once('model/commentsmanager.php');

function displayHome()
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->getLastEpisode();
  require("view/frontoffice/homeview.php");
}

function listEpisode()
{
  $episodeManager = new Episodes();
  $episodes = $episodeManager->getEpisodes();
  require("view/frontoffice/episodelistview.php");
}

function login()
{
  if (isset($_SESSION['statut'])){
    if ($_SESSION['statut'] == 'admin') {
      $commentManager = new Comments();
      $comments = $commentManager->getCommentsToModerate();
      $lastComments = $commentManager->getLastComments();
      $episodeManager = new Episodes();
      $episodes = $episodeManager->getEpisodes();
      require("view/backoffice/adminview.php");
    }
  } else {
    require("view/frontoffice/loginview.php");
  }
}

function episode($episodeId)
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->getEpisode($episodeId);
  $commentManager = new Comments();
  $comments = $commentManager->getComments($episodeId);
  require("view/frontoffice/episodeview.php");
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
  login();
}

function validComment($commentId)
{
  $commentManager = new Comments();
  $commentManager->validComment($commentId);
  login();
}


function loginUser($userIds)
{
  $loginManager = new Login();
  $login = $loginManager->verifyLogin($userIds);
  login();
}

function newEpisode()
{

  require("view/backoffice/editorview.php");

}

function saveNewEpisode($title,$episode)
{
  $episodeManager = new Episodes();
  $episodeManager->saveNewEpisode($title,$episode);
  login();
}

function modifyEpisode($episodeId)
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->getEpisode($episodeId);
  require("view/backoffice/modifyview.php");
}

function saveModifyEpisode($episodeId,$title,$episode)
{
  $episodeManager = new Episodes();
  $episode = $episodeManager->saveModifyEpisode($episodeId,$title,$episode);
  login();
}

function deleteEpisode($episodeId)
{
  $episodeManager = new Episodes();
  $episodeManager->deleteEpisode($episodeId);
  login();
}
