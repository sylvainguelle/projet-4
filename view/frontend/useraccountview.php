<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="user-panel" class="episode col-lg-12">
    <h3>Page utilisateur</h3>
    <?php
    if ($login) {
      echo "oui";
      print_r($userIds);
    }
    if ($admin) {
      echo "admin";
    }
    ?>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
