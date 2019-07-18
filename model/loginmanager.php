<?php

require_once("model/querymanager.php");

class Login extends QueryManager
{
  public function verifyLogin($userIds)
  {
    $emailLogin = $userIds['email'];
    $passwordLogin = md5($userIds['password']);
    $db = $this->dbConnect();
    $req = $db->query("SELECT * FROM users WHERE mail ='$emailLogin' ");
    $identifiant = $req->fetch();
    if ($passwordLogin == $identifiant[2]) {
      $_SESSION['statut'] = 'admin';
    }
  }
}
?>
