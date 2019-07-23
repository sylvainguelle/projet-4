<?php $title = "Admistration"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="user-panel" class="episode col-lg-12">
    <h1>TinyMCE</h1>
    <form action="index.php?action=saveNewEpisode" method="post">
      <label for="title">Titre de l'épisode :</label>
      <input type="text" name="title" value="">
      <textarea id="mytextarea" name="episode">Hello, World!</textarea>
      <input type="submit" name="valider" value="valider">
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/backoffice/templateadmin.php"); ?>
