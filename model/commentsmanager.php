<?php

require_once("model/querymanager.php");

class Comments extends QueryManager
{
  public function getComments($id)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM comments WHERE episodeId = ? ORDER BY id DESC");
    $req->execute(array($id));
    return $req;
  }

  public function addComment($postId, $pseudo, $comment)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("INSERT INTO comments(episodeId, pseudo, comment, commentDate) VALUES(?,?,?, NOW())");
    $req->execute(array($postId, $pseudo, $comment));
  }

  public function signalComment($commentId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("UPDATE comments SET moderate = '1' WHERE id =?");
    $req->execute(array($commentId));

  }

  public function deleteComment($commentId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("DELETE FROM comments WHERE id =?");
    $req->execute(array($commentId));
  }

  public function validComment($commentId)
  {
    $db = $this->dbConnect();
    $req = $db->prepare("UPDATE comments SET moderate = '0' WHERE id =?");
    $req->execute(array($commentId));
  }

  public function getCommentsToModerate(){
    $db = $this->dbConnect();
    $req = $db->prepare('SELECT * FROM comments WHERE moderate = 1');
    $req->execute();
    return $req;
  }

  public function getLastComments()
  {
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM comments ORDER BY id DESC LIMIT 10");
    $req->execute();
    return $req;
  }
}
