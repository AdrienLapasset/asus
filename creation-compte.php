<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('creation-compte')
?>

<?php include("partials/header-compte.php"); ?>

<main class="creation-compte">
  <div class="container">
    <h1 class="c-title">Création de compte</h1>
    <form class="c-form" action="">
      <div class="d-flex">
        <label class="checkbox-container">Mme
          <input type="radio" name="gender" value="mme">
          <span class="checkmark"></span>
        </label>
        <label class="checkbox-container">M.
          <input type="radio" name="gender" value="m.">
          <span class="checkmark"></span>
        </label>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="input-container">
            <input type="text" placeholder="Nom">
            <svg stroke="#A0A3BD" width="24" height="29" viewBox="0 0 24 29" fill="none"
              xmlns="http://www.w3.org/2000/svg">
              <path
                d="M11.8975 14.2607C15.6591 14.2607 18.7085 11.422 18.7085 7.92016C18.7085 4.41836 15.6591 1.57959 11.8975 1.57959C8.13592 1.57959 5.08655 4.41836 5.08655 7.92016C5.08655 11.422 8.13592 14.2607 11.8975 14.2607Z"
                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
              <path
                d="M1 27.4052C1 24.7146 2.14813 22.1342 4.19182 20.2316C6.23551 18.3291 9.00735 17.2603 11.8976 17.2603C14.7878 17.2603 17.5596 18.3291 19.6033 20.2316C21.647 22.1342 22.7951 24.7146 22.7951 27.4052"
                stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-container">
            <input type="text" placeholder="Prénom">
          </div>
        </div>
      </div>
      <div class="input-container">
        <input type="text" placeholder="Raison sociale*">
      </div>
      <div class="input-container">
        <input type="text" placeholder="SIRET">
      </div>
      <div class="input-container">
        <input type="text" placeholder="Adresse Société*">
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="input-container">
            <input type="text" placeholder="Code postal">
          </div>
        </div>
        <div class="col-lg-6">
          <div class="input-container">
            <input type="text" placeholder="Ville">
          </div>
        </div>
      </div>
      <div class="input-container">
        <input type="email" placeholder="E-mail*">
        <svg class="input-icon" stroke="#A0A3BD" width="26" height="18" viewBox="0 0 26 18" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="M22.992 0.974121H3.09448C1.93773 0.974121 1 1.86955 1 2.97412V14.9741C1 16.0787 1.93773 16.9741 3.09448 16.9741H22.992C24.1487 16.9741 25.0865 16.0787 25.0865 14.9741V2.97412C25.0865 1.86955 24.1487 0.974121 22.992 0.974121Z"
            stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
          <path d="M24.4695 1.55615L13.0431 10.4742L1.6167 1.55615" stroke-width="1.6" stroke-linecap="round"
            stroke-linejoin="round" />
        </svg>
      </div>
      <div class="input-container">
        <input type="password" placeholder="Mot de passe*">
      </div>
      <label class="checkbox-container small">
        J’ai lu et j’accepte le règlement du jeu*
        <input type="checkbox">
        <span class="checkmark"></span>
      </label>
      <button type="submit" class="c-btn c-btn-primary mb-5">Valider <img class="ms-2" src="assets/icons/arrow.svg"
          alt="arrow"></button>
    </form>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-login-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>