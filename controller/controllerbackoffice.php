<?php
require_once('model/episodemanager.php');
require_once('model/querymanager.php');
require_once('model/loginmanager.php');
require_once('model/commentsmanager.php');

class BackOfficeController
{
  public function login()
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

  public function deleteComment($commentId)
  {
    $commentManager = new Comments();
    $commentManager->deleteComment($commentId);
    $this->login();
  }

  public function validComment($commentId)
  {
    $commentManager = new Comments();
    $commentManager->validComment($commentId);
    $this->login();
  }


  public function loginUser($userIds)
  {
    $loginManager = new Login();
    $login = $loginManager->verifyLogin($userIds);
    $this->login();
  }

  public function newEpisode()
  {

    require("view/backoffice/editorview.php");

  }

  public function saveNewEpisode($title,$episode)
  {
    $episodeManager = new Episodes();
    $episodeManager->saveNewEpisode($title,$episode);
    $this->login();
  }

  public function modifyEpisode($episodeId)
  {
    $episodeManager = new Episodes();
    $episode = $episodeManager->getEpisode($episodeId);
    require("view/backoffice/modifyview.php");
  }

  public function saveModifyEpisode($episodeId,$title,$episode)
  {
    $episodeManager = new Episodes();
    $episode = $episodeManager->saveModifyEpisode($episodeId,$title,$episode);
    $this->login();
  }

  public function deleteEpisode($episodeId)
  {
    $episodeManager = new Episodes();
    $episodeManager->deleteEpisode($episodeId);
    $this->login();
  }
}
