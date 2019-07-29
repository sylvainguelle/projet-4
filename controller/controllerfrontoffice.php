<?php
require_once('model/episodemanager.php');
//require_once('model/querymanager.php');
require_once('model/loginmanager.php');
require_once('model/commentsmanager.php');

class FrontOfficeController
{
  public function displayHome()
  {
    $episodeManager = new Episodes();
    $episode = $episodeManager->getLastEpisode();
    require("view/frontoffice/homeview.php");
  }

  public function listEpisode()
  {
    $episodeManager = new Episodes();
    $episodes = $episodeManager->getEpisodes();
    require("view/frontoffice/episodelistview.php");
  }

  public function episode($episodeId)
  {
    $episodeManager = new Episodes();
    $episode = $episodeManager->getEpisode($episodeId);
    $commentManager = new Comments();
    $comments = $commentManager->getComments($episodeId);
    require("view/frontoffice/episodeview.php");
  }

  public function addComment($postId, $pseudo, $comment)
  {
    $commentManager = new Comments();
    $commentManager->addComment($postId, $pseudo, $comment);
  }

  public function signalComment($commentId)
  {
    $commentManager = new Comments();
    $commentManager->signalComment($commentId);
  }
}
