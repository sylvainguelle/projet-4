<?php
require("controller/controller.php");
try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listEpisode') {
      listEpisode();
    }
    elseif ($_GET['action'] == 'login') {
      login();
    }
    elseif ($_GET['action'] == 'episode') {
      episode($_GET['id']);
    }
    elseif ($_GET['action'] == 'loginUser') {
      loginUser($_POST);
    }
  }
  else {
    displayHome();
  }

}

catch (\Exception $e) {

}

 ?>
