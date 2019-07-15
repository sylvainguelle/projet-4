<?php

require_once("model/querymanager.php");

class Comments extends QueryManager
{
  public function getComments($id)
  {
    $db = $this->dbConnect();
    $req = $db->query("SELECT * FROM comments WHERE episodeId ='$id'");
    return $req;
  }

  public function addComment($postId, $pseudo, $comment)
  {
    $db = $this->dbConnect();
    $db->query("INSERT INTO comments(episodeId, pseudo, comment, commentDate) VALUES('$postId','$pseudo','$comment', NOW())");
  }
  /*$db = $this->dbConnect();
  $req = $db->query('SELECT * FROM episode ORDER BY id');
  return $req;*/

  //function recuperer les comment suivant id episode

  //function ajout comment

  //function signaler commentaire
}
