<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('mes-coordonees')
?>
<?php include("partials/header-menu.php"); ?>

<main class="mes-coordonees">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <h1 class="c-title">Enregistrer une nouvelle action</h1>
        <form class="c-form" action="">
          <div class="input-container">
            <label for="">
              Actions éligibles*
            </label>
            <select class="select-number" name="" id="">
              <option value="1">Sélectionner</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
            </select>
            <img src="assets/icons/arrow-select.svg" alt="">
          </div>
          <div class="input-container">
            <label for="">
              Numéro de série du produit *
            </label>
            <input type="text" placeholder="XXXXXXXX">
          </div>
          <div class="input-container">
            <label for="">
              Code de validation*
            </label>
            <input type="text" placeholder="XXXXXXXX">
          </div>
          <div class="input-container">
            <label for="">
              Date de participation*
            </label>
            <input type="date" placeholder="JJ/MM/AA">
          </div>
          <div class="row align-items-center">
            <div class="col-7 d-none d-lg-block">
              <img src="assets/icons/download.svg" alt="">
              Télécharger mon justificatif*
            </div>
            <div class="col-lg-5">
              <input type="file" id="file">
              <label for="file" class="c-btn c-btn-secondary">
                <span class="d-none d-lg-block">Parcourir</span>
                <span class="d-lg-none">Télécharger mon justificatif*</span>
              </label>
            </div>
          </div>
          <p class="blue-text d-lg-none mt-3">*Champs obligatoires </p>
          <button type="submit" class="c-btn c-btn-primary mt-2">Enregirstrer<img class="ms-2"
              src="assets/icons/arrow.svg" alt="arrow"></button>
        </form>
      </div>
    </div>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-action-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>