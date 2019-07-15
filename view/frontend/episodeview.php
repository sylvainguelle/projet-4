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
     <div class="episode">
       <h3>Commentaires des lecteurs</h3>
       <form action="index.php?action=addComment&amp;id=<?= $episodeId ?>" method="post">
         <label for="pseudo">Pseudo :</label>
         <input type="text" name="pseudo" value="" required>
         <br>
         <label for="comment">Commentaire :</label>
         <textarea name="comment" rows="3" cols="20" required></textarea>
         <br>
         <input type="submit" name="valider" value="Ajouter le commentaire">
       </form>
       <?php
       while ($comment = $comments->fetch())
       {
         $commentPseudo = htmlspecialchars($comment[3]);
         $commentDate = htmlspecialchars($comment[4]);
         $commentContain = htmlspecialchars($comment[2]);
         $commentId = $comment[0];
        ?>
          <div class="comment">
            <h4>Commentaire de <?= $commentPseudo ?></h4>
            <em>Publié le <?= $commentDate ?></em>
            <p><?= $commentContain ?></p>
            <a href="index.php?action=signalComment&amp;id=<?= $commentId ?>&amp;epId=<?= $episodeId ?>">Signaler le commentaire à la modération</a>
          </div>
       <?php
       }
       $comments->closeCursor()
       ?>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
