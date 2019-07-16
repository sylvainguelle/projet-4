<?php
session_start();

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
    elseif ($_GET['action'] == 'deleteComment') {
      deleteComment($_GET['id']);
    }
    elseif ($_GET['action'] == 'validComment') {
      validComment($_GET['id']);
    }
    elseif ($_GET['action'] == 'newEpisode') {
      newEpisode();
    }
    elseif ($_GET['action'] == 'saveNewEpisode') {
      saveNewEpisode($_POST['title'],$_POST['episode']);
    }
    elseif ($_GET['action'] == 'modifyEpisode') {
      modifyEpisode($_GET['id']);
    }
    elseif ($_GET['action'] == 'saveModifyEpisode') {
      saveModifyEpisode($_GET['id'],$_POST['title'],$_POST['episode']);
    }
    elseif ($_GET['action'] == 'deleteEpisode') {
      deleteEpisode($_GET['id']);
    }
  }
  else {
    displayHome();
  }

}

catch (\Exception $e) {

}

 ?>
