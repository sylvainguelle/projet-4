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
      $verifyMail = htmlspecialchars($identifiant[1]);
      $verifyPassword = $identifiant[2];
      if ($passwordLogin == $verifyPassword && $emailLogin == $verifyMail)
      {
        $status = true;
      }
    }
    $req->closeCursor();
    return $status;
  }

  public function adminLogin($userIds)
  {
    $status = false;
    $emailLogin = htmlspecialchars($userIds['email']);
    $db = $this->dbConnect();
    $req = $db->query("SELECT admin FROM users WHERE mail = '$emailLogin'");
    $admin = $req->fetch();
    if ($admin[0]) {
      $status = true;
    }
    return $status;
  }
}
?>
