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

  public function signalComment($commentId)
  {
    $db = $this->dbConnect();
    $db->query("UPDATE comments SET moderate = '1' WHERE id ='$commentId'");

  }

  public function deleteComment($commentId)
  {
    $db = $this->dbConnect();
    $db->query("DELETE FROM comments WHERE id ='$commentId'");
  }

  public function validComment($commentId)
  {
    $db = $this->dbConnect();
    $db->query("UPDATE comments SET moderate = '0' WHERE id ='$commentId'");
  }

  public function getCommentsToModerate(){
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM comments WHERE moderate = 1');
    return $req;
  }
}
