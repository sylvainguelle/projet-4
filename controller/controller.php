<?php

require_once('model/episodemanager.php');
require_once('model/querymanager.php');
require_once('model/loginmanager.php');

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
  require("view/frontend/episodeview.php");
}

function loginUser($userIds)
{
  $loginManager = new Login();
  $login = $loginManager->verifyLogin($userIds);
  if ($login) {
    require("view/frontend/useraccountview.php");
  } else {
    require("view/frontend/loginview.php");
  }
  //verifier email et password
  //page utilisateur
  //si non retour formulaire avec msg
}

function inscription()
{
  echo "inscription";
  //verifier les champs
  //si non retour formulaire avec imap_msg
  //page utilisateur
}

 ?>
