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
    <h1 class="c-title">
      <span class="blue-text">Pour participer,<br></span>
      vous devez créer un compte
    </h1>
    <form class="c-form" action="">
      <div class="input-container">
        <input type="text" placeholder="Je crée un compte">
        <svg class="input-icon" stroke="#54A4F5" width="24" height="29" viewBox="0 0 24 29" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M11.8975 14.2607C15.6591 14.2607 18.7085 11.422 18.7085 7.92016C18.7085 4.41836 15.6591 1.57959 11.8975 1.57959C8.13592 1.57959 5.08655 4.41836 5.08655 7.92016C5.08655 11.422 8.13592 14.2607 11.8975 14.2607Z"
            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
          <path
            d="M1 27.4052C1 24.7146 2.14813 22.1342 4.19182 20.2316C6.23551 18.3291 9.00735 17.2603 11.8976 17.2603C14.7878 17.2603 17.5596 18.3291 19.6033 20.2316C21.647 22.1342 22.7951 24.7146 22.7951 27.4052"
            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </div>
      <div class="input-container">
        <input type="text" placeholder="J’ai déjà un compte, je me connecte">
        <img src="assets/icons/pen.svg" alt="">
      </div>
      <a class="c-btn c-btn-primary">Valider <img class="ms-2" src="assets/icons/arrow.svg" alt="arrow"></a>
    </form>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-login-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>