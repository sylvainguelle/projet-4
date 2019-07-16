<?php $title = "Admistration"; ?>

<?php ob_start(); ?>
<?php
$episodeId = $episode[0];
$episodeTitle = $episode[1];
$episodeText = $episode[2];
$episodeDate = $episode[3];
?>
<div id="blog-login" class="row justify-content-center">
  <div id="user-panel" class="episode col-lg-12">
    <h1>TinyMCE</h1>
    <form action="index.php?action=saveModifyEpisode" method="post">
      <label for="title">Titre de l'épisode :</label>
      <input type="text" name="title" value="<?= $episodeTitle ?>">
      <textarea id="mytextarea" name="episode"><?= $episodeText?></textarea>
      <input type="submit" name="valider" value="valider">
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/backend/templateadmin.php"); ?>
