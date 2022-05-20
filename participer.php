<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('participer')
?>

<?php include("partials/header-compte.php"); ?>

<main class="participer content-center">
  <div class="container">
    <form class="g-form" action="">
      <div class="input-container">
        <input type="text" placeholder="Nom">
        <img src="assets/icons/pen.svg" alt="">
      </div>
      <div class="input-container">
        <input type="text" placeholder="Prénom">
        <img src="assets/icons/pen.svg" alt="">
      </div>
      <button class="c-btn c-btn-primary">Je participe ➔</button>
    </form>
  </div>
</main>

<?php include 'partials/footer.php'; ?>