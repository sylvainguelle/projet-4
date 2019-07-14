<?php

require_once("model/querymanager.php");

class Login extends QueryManager
{
  public function verifyLogin($userIds)
  {
    $status = false;
    $db = $this->dbConnect();
    $req = $db->query('SELECT * FROM users');
    $passwordLogin = md5($userIds['password']);
    $emailLogin = htmlspecialchars($userIds['email']);
    while ($identifiant = $req->fetch())
    {
      $verifyMail = htmlspecialchars($identifiant[2]);
      $verifyPassword = $identifiant[3];
      if ($passwordLogin == $verifyPassword && $emailLogin == $verifyMail)
      {
        $status = true;
      }
    }
    $req->closeCursor();
    return $status;
  }
}
?>
