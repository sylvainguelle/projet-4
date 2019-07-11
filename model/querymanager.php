<?php

class QueryManager
{
  protected function dbConnect()
  {
    $db = new PDO('mysql:host=localhost;dbname=BSPA;charset=utf8', 'root', 'root');
    return $db;
  }
}
