<?php

require_once("model/querymanager.php");

class Admin extends QueryManager
{
  public function getComments(){
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM comments WHERE moderate = 1');
    return $req;
  }
  //supprimer un commentaire signaler

  //creer un nouvelle episode

  //modifier un episode existant
}
