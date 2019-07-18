<?php

require_once("model/querymanager.php");

class Login extends QueryManager
{
  public function verifyLogin($userIds)
  {
    $emailLogin = $userIds['email'];
    $passwordLogin = md5($userIds['password']);
    $db = $this->dbConnect();
    $req = $db->prepare("SELECT * FROM users WHERE mail =?");
    $req->execute(array($emailLogin));
    $identifiant = $req->fetch();
    if ($passwordLogin == $identifiant[2]) {
      $_SESSION['statut'] = 'admin';
    }
  }
}
?>
