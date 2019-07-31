<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<div id="blog-presentation" class="row justify-content-between">
  <div id="presentation-portrait" class="col-lg-4">
    <img src="public/images/author-portrait.jpeg" alt="">
  </div>
  <div id="presentation-text" class="col-lg-8">
    <h2>Bienvenue sur le blog livre de Jean Forteroche</h2>
    <p>Jean Forteroche, né le 01 janvier 1970 à San Francisco, est un écrivain
      français dont les thèmes de prédilection sont l'aventure et la nature
      sauvage.</p>
    <p>Il tire aussi de ses lectures et de sa propre vie de bohème l'inspiration pour de nombreux ouvrages.</p>
    <p>Pour son nouveau roman, "Billet simple pour l'Alaska", Jean Forteroche innove et les épisodes seront publiés en ligne sur ce blog.</p>
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
      <p><?= substr(strip_tags($episodeText),0,600)?> ... <a class="episode-link" href="index.php?action=episode&amp;id=<?= $episodeId ?>">(lire la suite)</a></p>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontoffice/template.php"); ?>
