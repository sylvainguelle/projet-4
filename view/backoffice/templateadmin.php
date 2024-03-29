<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/za17hvrk5xgxb2y7q50j7t1cy3s4vjl40938i3r6n5psj6jp/tinymce/5/tinymce.min.js"></script>
    <script>
      tinymce.init({
        selector: '#mytextarea',
        height: 500
      });
    </script>
    <script src="./public/js/navbar.js"></script>
    <link rel="icon" type="image/x-icon" href="./public/images/mountain-15-48-260771.png">
    <link rel="stylesheet" href="./public/css/style.css" />
  </head>
  <body>
    <?php
    if (isset($_GET['action'])) {
      $actionPage = $_GET['action'];
      if ($actionPage == 'listEpisode' OR $actionPage == 'episode' OR $actionPage == 'addComment' OR $actionPage == 'signalComment') {
        $actionPage = 'chapitre';
      }
      else if ($actionPage == 'login' OR $actionPage == 'loginUser' OR $actionPage == 'deleteComment' OR $actionPage == 'validComment' OR $actionPage == 'newEpisode' OR $actionPage == 'saveNewEpisode' OR $actionPage == 'modifyEpisode' OR $actionPage == 'saveModifyEpisode' OR $actionPage == 'deleteEpisode') {
        $actionPage = 'login';
      }
    }
    else {
      $actionPage = 'index';
    }
   ?>
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light">
      <a class="navbar-brand" href="index.php">Billet simple pour l'Alaska</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item <?php if ($actionPage == "index") { echo 'active';} ?>">
            <a class="nav-link" href="index.php">Accueil <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item <?php if ($actionPage == "chapitre") { echo 'active';} ?>">
            <a class="nav-link" href="index.php?action=listEpisode">Chapitres</a>
          </li>
          <li class="nav-item <?php if ($actionPage == "login") { echo 'active';} ?>">
            <a class="nav-link" href="index.php?action=login">login</a>
          </li>
        </ul>
      </div>
    </nav>
    <div id="main-content" class="container">
      <?= $content ?>
    </div>
  </body>
</html>
