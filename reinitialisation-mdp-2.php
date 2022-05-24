<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('reinitialisation-mdp')
?>

<?php include("partials/header-compte.php"); ?>

<main class="reinitialisation-mdp content-center">
  <div class="container">
    <h1 class="c-title">
      Mot de passe réinitialisé<br>
      <span class="blue-text">avec succès</span>
    </h1>
    <form class="c-form" action="">
      <div class="input-container">
        <input type="text" placeholder="Nouveau mot de passe">
      </div>
      <div class="input-container">
        <input type="text" placeholder="Confirmez le nouveau mot de passe">
      </div>
      <a class="c-btn c-btn-primary">Réinitialiser <img src="assets/icons/arrow.svg" alt="arrow"></a>
    </form>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-reinitialisation-mdp-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>