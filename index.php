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
  }
  else {
    displayHome();
  }

}

catch (\Exception $e) {

}

 ?>
