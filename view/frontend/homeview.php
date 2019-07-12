<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<div id="blog-presentation" class="row justify-content-between">
  <div id="presentation-portrait" class="col-lg-4">
    <img src="public/images/author-portrait.jpeg" alt="">
  </div>
  <div id="presentation-text" class="col-lg-8">
    <h2>Bienvenue sur le blog livre de Jean Brochefort</h2>
    <p>Jean Brochefort, acteur et écrivain, innove pour son nouveau roman. Les episodes seront publiés en ligne sur ce blog. Pour ne pas rater un épisode, inscrivez-vous!</p>
  </div>
</div>
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
      <p><?= substr($episodeText,0,200)?> ... <a class="episode-link" href="index.php?action=episode&amp;id=<?= $episodeId ?>">(lire la suite)</a></p>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
