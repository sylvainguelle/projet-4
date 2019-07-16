<?php

require_once("model/querymanager.php");

class Episodes extends QueryManager
{
  public function getEpisodes()
  {
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM episode ORDER BY id');
    return $req;
  }

  public function getEpisode($episodeId)
  {
    $db = $this->dbConnect();
    $req = $db->query("SELECT * FROM episode WHERE id ='$episodeId'");
    $episode = $req->fetch();
    return $episode;
  }

  public function getLastEpisode()
  {
    $db = $this->dbConnect();
    $req = $db->query("SELECT * FROM episode ORDER BY id DESC LIMIT 1");
    $episode = $req->fetch();
    return $episode;
  }

  public function saveNewEpisode($title,$episode)
  {
    $db = $this->dbConnect();
    $db->query("INSERT INTO episode(title,episodeText,date) VALUES('$title','$episode', NOW())");
  }
}
