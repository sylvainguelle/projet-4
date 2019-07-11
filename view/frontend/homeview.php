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
    <div class="episode">
      <h3>titre chapitre</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
  <div class="col-lg-12">
    <div class="episode">
      <h3>titre chapitre</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require("view/frontend/template.php"); ?>
