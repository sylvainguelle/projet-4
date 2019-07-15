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
    elseif ($_GET['action'] == 'addComment') {
        addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
        episode($_GET['id']);
    }
    elseif ($_GET['action'] == 'signalComment') {
        signalComment($_GET['id']);
        episode($_GET['epId']);
    }
  }
  else {
    displayHome();
  }

}

catch (\Exception $e) {

}

 ?>
