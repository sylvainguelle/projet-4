<?php $title = "Admistration"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="user-panel" class="episode col-lg-12">
    <h4>Commentaires signalés par les lecteurs</h4>
    <?php
      while ($comment = $comments->fetch())
      {
        $commentId = $comment[0];
        $commentEp = $comment[1];
        $commentContain = $comment[2];
        $commentPseudo = $comment[3];
        $commentDate = $comment[4];
        ?>
        <p>
          Commentaire de
          <?= htmlspecialchars($commentPseudo) ?> du <?= $commentDate ?> :  <?= htmlspecialchars($commentContain) ?>
          <a href="index.php?action=deleteComment&amp;id=<?= $commentId ?>">supprimer</a>
          <a href="index.php?action=validComment&amp;id=<?= $commentId ?>">valider</a>
        </p>
      <?php
      }
      $comments->closeCursor();
    ?>
  </div>
  <div id="user-panel" class="episode col-lg-12">
    <h4>Dernier commentaires écrit par les lecteurs</h4>
    <?php
      while ($comment = $lastComments->fetch())
      {
        $commentId = $comment[0];
        $commentEp = $comment[1];
        $commentContain = $comment[2];
        $commentPseudo = $comment[3];
        $commentDate = $comment[4];
        ?>
        <p>
          Commentaire de
          <?= htmlspecialchars($commentPseudo) ?> du <?= $commentDate ?> :  <?= htmlspecialchars($commentContain) ?>
          <a href="index.php?action=deleteComment&amp;id=<?= $commentId ?>">supprimer</a>
          <a href="index.php?action=validComment&amp;id=<?= $commentId ?>">valider</a>
        </p>
      <?php
      }
      $lastComments->closeCursor();
    ?>
  </div>
  <div id="user-panel" class="episode col-lg-12">
    <h4><a href="index.php?action=newEpisode">Rediger un nouvel épisode</a></h4>
    <h4>Modifier un episode</h4>
    <?php
    while ($episode = $episodes->fetch())
    {
     $episodeId = $episode[0];
     $episodeTitle = $episode[1];
     $episodeText = $episode[2];
     $episodeDate = $episode[3];
     ?>
     <p><?= $episodeTitle ?> du <?= $episodeDate ?>
       <a href="index.php?action=modifyEpisode&amp;id=<?= $episodeId ?>">modifier</a>
       <a href="index.php?action=deleteEpisode&amp;id=<?= $episodeId ?>">supprimer</a></p>
    <?php
    }
    $episodes->closeCursor()
    ?>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontoffice/template.php"); ?>
