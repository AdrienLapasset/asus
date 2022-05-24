<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('home')
?>
<?php include("partials/header-home.php"); ?>

<main class="home content-center">
  <div class="container">
    <h2>Partner Incentive</h2>
    <h1>BACK TO WORK</h1>
    <p>Remportez un maximum de cadeaux pour la rentrée avec ASUS Business</p>
    <a class="c-btn c-btn-primary">Je participe <img class="ms-2" src="assets/icons/arrow.svg" alt="arrow"></a>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-home-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>