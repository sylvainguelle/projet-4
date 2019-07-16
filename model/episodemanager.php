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

  public function saveModifyEpisode($episodeId,$title,$episode)
  {
    $db = $this->dbConnect();
    $db->query("UPDATE episode SET title ='$title', episodeText = '$episode' WHERE id='$episodeId'");
  }

  public function deleteEpisode($episodeId)
  {
    $db = $this->dbConnect();
    $db->query("DELETE FROM episode WHERE id ='$episodeId'");
  }
}
