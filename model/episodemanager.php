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
}
