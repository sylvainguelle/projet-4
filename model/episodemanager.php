<?php

require_once("model/querymanager.php");

class Episodes extends QueryManager
{
  public function getEpisodes()
  {
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT * FROM episode ORDER BY id');
    $req->execute();
    return $req;
  }

  public function getEpisode($episodeId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM episode WHERE id =?");
    $req->execute(array($episodeId));
    $episode = $req->fetch();
    return $episode;
  }

  public function getLastEpisode()
  {
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM episode ORDER BY id DESC LIMIT 1");
    $req->execute();
    $episode = $req->fetch();
    return $episode;
  }

  public function saveNewEpisode($title,$episode)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("INSERT INTO episode(title,episodeText,date) VALUES(?,?, NOW())");
    $req->execute(array($title,$episode));
  }

  public function saveModifyEpisode($episodeId,$title,$episode)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("UPDATE episode SET title =?, episodeText = ? WHERE id=?");
    $req->execute(array($title,$episode,$episodeId));
  }

  public function deleteEpisode($episodeId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("DELETE FROM episode WHERE id =?");
    $req->execute(array($episodeId));
  }
}
