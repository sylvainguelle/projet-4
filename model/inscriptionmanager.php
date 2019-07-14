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
    print_r($userIds);
    $firstName = htmlspecialchars($userIds['firstname']);
    $lastName = htmlspecialchars($userIds['lastname']);
    $email = htmlspecialchars($userIds['email']);
    $password = md5(htmlspecialchars($userIds['password']));

    $db = $this->dbconnect();
    $db->query("INSERT INTO users (firstname,lastname,mail,password) VALUES ('$firstName','$lastName','$email','$password') ");
  }
  /*$firstName = htmlspecialchars($_POST['firstname']);
$lastName = htmlspecialchars($_POST['lastname']);
$email = htmlspecialchars($_POST['email']);
$password = md5(htmlspecialchars($_POST['password']));

$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root');
$bdd->query("INSERT INTO testform (firstname,lastname,email,password) VALUES ('$firstName','$lastName','$email','$password') ");

require('index.php');*/
}
?>
