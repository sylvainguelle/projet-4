<?php $title = "Liste des chapitres"; ?>

<?php ob_start(); ?>
<div id="blog-last-episode" class="row justify-content-between">
    <?php
    while ($episode = $episodes->fetch())
    {
     $episodeId = $episode[0];
     $episodeTitle = $episode[1];
     $episodeText = $episode[2];
     $episodeDate = $episode[3];
     ?>
     <div class="col-lg-12">
       <div class="episode">
         <h3><?= $episodeTitle ?></h3>
         <em>Publié le <?= $episodeDate ?></em><br>
         <p><?= substr(strip_tags($episodeText),0,200)?> ... <a class="episode-link" href="index.php?action=episode&amp;id=<?= $episodeId ?>">(lire la suite)</a></p>
       </div>
     </div>
    <?php
    }
    $episodes->closeCursor()
    ?>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontoffice/template.php"); ?>
