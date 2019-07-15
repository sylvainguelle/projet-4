<?php $title = "Connection"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="inscription" class="formulaire col-lg-5">
    <h3>Connection à l'interface d'administration</h3>
    <form class="" action="index.php?action=loginUser" method="post">
      <div class="">
        <label for="email">Adresse mail : </label>
        <input type="email" name="email" value="" required>
      </div>
      <div class="">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" required>
      </div>
      <div class="">
        <input type="submit" name="envoyer" required>
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

<?php require("view/frontend/template.php"); ?>
