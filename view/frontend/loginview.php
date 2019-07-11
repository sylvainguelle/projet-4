<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-between">
  <div id="login" class="formulaire col-lg-12">
    <form action="index.html" method="post">
      <input type="text" name="" value="">
      <input type="text" name="" value="">
      <input type="submit" name="valider" value="valider">
    </form>
  </div>
  <div id="inscription" class="formulaire col-lg-12">
    <form action="index.html" method="post">
      <input type="text" name="" value="">
      <input type="text" name="" value="">
      <input type="submit" name="valider" value="valider">
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
