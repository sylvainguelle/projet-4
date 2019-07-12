<?php $title = "episode $episodeId"; ?>

<?php ob_start(); ?>
<div id="blog-last-episode" class="row justify-content-between">
  <div class="col-lg-12">
      <?php
      $episodeId = $episode[0];
      $episodeTitle = $episode[1];
      $episodeText = $episode[2];
      $episodeDate = $episode[3];
      ?>
      <div class="episode">
        <h3><?= $episodeTitle ?></h3>
        <em>Publié le <?= $episodeDate ?></em>
        <p><?= $episodeText?></p>
     </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
