<?php

require_once('model/episodemanager.php');
require_once('model/querymanager.php');
require_once('model/loginmanager.php');
require_once('model/inscriptionmanager.php');


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
}

function inscription($userIds)
{
  $inscriptionManager = new Inscription();
  $inscription = $inscriptionManager->checkUserMail($userIds['email']);
  if ($inscription) {
    $inscriptionManager->addUser($userIds);
  } else {
    require("view/frontend/loginview.php");
  }
  //print_r($userIds['email']);
  //verifier les champs
  //si non retour formulaire avec msg
  //page utilisateur
}

 ?>
