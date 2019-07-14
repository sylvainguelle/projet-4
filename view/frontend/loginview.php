<?php $title = "Accueil"; ?>

<?php ob_start(); ?>
<div id="blog-login" class="row justify-content-center">
  <div id="login" class="formulaire col-lg-5">
    <h3>Formulaire d'incription</h3>
    <form class="" action="cible.php" method="post">
      <div class="">
        <label for="firstname">Nom : </label>
        <input type="text" name="firstname" required>
      </div>
      <div class="">
        <label for="lastname">Prénom : </label>
        <input type="text" name="lastname" required>
      </div>
      <div class="">
        <label for="email">Adresse mail : </label>
        <input type="email" name="email" value="" required>
      </div>
      <div class="">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" value="" required>
      </div>
      <div class="">
        <input type="submit" name="envoyer" required>
      </div>
    </form>
  </div>
  <div id="inscription" class="formulaire col-lg-5">
    <h3>Déja inscrit ? Connectez vous ici!</h3>
    <form class="" action="cible.php" method="post">
      <div class="">
        <label for="email">Adresse mail : </label>
        <input type="email" name="email" value="" required>
      </div>
      <div class="">
        <label for="password">Mot de passe : </label>
        <input type="password" name="password" value="" required>
      </div>
      <div class="">
        <input type="submit" name="envoyer" required>
      </div>
    </form>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
