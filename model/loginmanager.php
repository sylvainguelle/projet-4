<?php

require_once("model/querymanager.php");

class Login extends QueryManager
{
  public function verifyLogin($userIds)
  {
    $status = false;
    $emailLogin = $userIds['email'];
    $passwordLogin = md5($userIds['password']);
    $db = $this->dbConnect();
    $req = $db->query("SELECT * FROM users WHERE mail ='$emailLogin' ");
    $identifiant = $req->fetch();
    print_r($identifiant);
    if ($passwordLogin == $identifiant[2]) {
      $status = true;
      $_SESSION['statut'] = 'admin';
    }
    return $status;
  }
}
?>
