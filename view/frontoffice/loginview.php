<?php $title = "Connection"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="inscription" class="formulaire col-lg-5">
    <h3>Connection à l'interface d'administration</h3>
    <form action="index.php?action=loginUser" method="post">
      <div class="">
        <label for="email">Adresse mail : </label>
        <input id="email" type="email" name="email" required>
      </div>
      <div class="">
        <label for="password">Mot de passe : </label>
        <input id="password" type="password" name="password" required>
      </div>
      <div class="">
        <input type="submit" name="envoyer">
      </div>
      <div>
      <?php
      if (isset($login))
      {
        if (!$login)
        {
            echo "<p>Identifiants incorrects</p>";
        }
      }
      ?>
      </div>
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontoffice/template.php"); ?>
