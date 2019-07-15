<?php

require_once("model/querymanager.php");

class Comments extends QueryManager
{
  $db = $this->dbConnect();
  $req = $db->query('SELECT * FROM episode ORDER BY id');
  return $req;

  //function recuperer les comment suivant id episode

  //function ajout comment

  //function signaler commentaire
}
