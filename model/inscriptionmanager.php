<?php

require_once("model/querymanager.php");

class Inscription extends QueryManager
{
  //function verifier si existant par email
  public function checkUserMail($userMail)
  {
    $mailIsValid = true;
    $db = $this->dbConnect();
    $req = $db->query('SELECT mail FROM users');
    while ($mail = $req->fetch())
    {
      $verifyMail = htmlspecialchars($mail[0]);
      if ($userMail == $verifyMail)
      {
        $mailIsValid = false;
      }
    }
    $req->closeCursor();
    return $mailIsValid;
  }

  public function addUser($userIds)
  {
    $firstName = htmlspecialchars($userIds['firstname']);
    $lastName = htmlspecialchars($userIds['lastname']);
    $email = htmlspecialchars($userIds['email']);
    $password = md5(htmlspecialchars($userIds['password']));

    $db = $this->dbconnect();
    $db->query("INSERT INTO users (firstname,lastname,mail,password) VALUES ('$firstName','$lastName','$email','$password') ");
  }
}
?>
