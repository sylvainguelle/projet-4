<?php

require_once('model/episodemanager.php');
require_once('model/querymanager.php');


function displayHome()
{
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

function episode()
{
  $episodeId = $_GET['id'];
  require("view/frontend/episodeview.php");
}

 ?>
