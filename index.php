<?php
session_start();

require("controller/controllerfrontoffice.php");
require("controller/controllerbackoffice.php");

$frontOfficeController = new FrontOfficeController();
$backOfficeController = new BackOfficeController();

try {
  if (isset($_GET['action'])) {
    if ($_GET['action'] == 'listEpisode') {
      $frontOfficeController->listEpisode();
    }
    elseif ($_GET['action'] == 'login') {
      $backOfficeController->login();
    }
    elseif ($_GET['action'] == 'episode') {
      $frontOfficeController->episode($_GET['id']);
    }
    elseif ($_GET['action'] == 'loginUser') {
      $backOfficeController->loginUser($_POST);
    }
    elseif ($_GET['action'] == 'addComment') {
        $frontOfficeController->addComment($_GET['id'], $_POST['pseudo'], $_POST['comment']);
        $frontOfficeController->episode($_GET['id']);
    }
    elseif ($_GET['action'] == 'signalComment') {
        $frontOfficeController->signalComment($_GET['id']);
        $frontOfficeController->episode($_GET['epId']);
    }
    elseif ($_GET['action'] == 'deleteComment') {
      $backOfficeController->deleteComment($_GET['id']);
    }
    elseif ($_GET['action'] == 'validComment') {
      $backOfficeController->validComment($_GET['id']);
    }
    elseif ($_GET['action'] == 'newEpisode') {
      $backOfficeController->newEpisode();
    }
    elseif ($_GET['action'] == 'saveNewEpisode') {
      $backOfficeController->saveNewEpisode($_POST['title'],$_POST['episode']);
    }
    elseif ($_GET['action'] == 'modifyEpisode') {
      $backOfficeController->modifyEpisode($_GET['id']);
    }
    elseif ($_GET['action'] == 'saveModifyEpisode') {
      $backOfficeController->saveModifyEpisode($_GET['id'],$_POST['title'],$_POST['episode']);
    }
    elseif ($_GET['action'] == 'deleteEpisode') {
      $backOfficeController->deleteEpisode($_GET['id']);
    }
  }
  else {
    $frontOfficeController->displayHome();
  }

}

catch (\Exception $e) {
  echo $e;
}

 ?>
