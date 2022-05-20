<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('accueil')
?>

<?php include("partials/header-menu.php"); ?>

<main class="acceuil">
  <div class="d-flex">
    <div class="left-col">
      <div class="text-container">
        <h1>Bonjour Alexandre!</h1>
        <p>Il vous reste à cumuler 50 points avant de débloquer votre prochain cadeau ! </p>
        <button class="c-btn c-btn-primary">Enregistrer une nouvelle action</button>
      </div>
      <img class="img-fluid" src="assets/imgs/accueil.jpg" alt="">
    </div>
    <div class="right-col">
      <div class="cadeaux-container">
        <div class="cadeau-container">
          <div class="points">
            1000 points
          </div>
          <div class="dot"></div>
          <div class="cadeau"></div>
        </div>
        <div class="cadeau-container">
          <div class="points">
            750 points
          </div>
          <div class="dot"></div>
          <div class="cadeau">
            <img src="assets/imgs/carte-cadeau.png" alt="">
            Ordinateur portable ASUS
            <aside>Encore 5 produits disponibles</aside>
          </div>
        </div>
        <div class="cadeau-container">
          <div class="points">
            750 points
          </div>
          <div class="dot dark"></div>
          <div class="cadeau">
            <img src="assets/imgs/carte-cadeau.png" alt="">
            Ordinateur portable ASUS
            <aside>Encore 5 produits disponibles</aside>
          </div>
        </div>
        <div class="cadeau-container">
          <div class="points">
            750 points
          </div>
          <div class="dot dark"></div>
          <div class="cadeau">
            <img src="assets/imgs/carte-cadeau.png" alt="">
            Ordinateur portable ASUS
            <aside>Encore 5 produits disponibles</aside>
          </div>
        </div>
        <div class="cadeau-container">
          <div class="points">
            750 points
          </div>
          <div class="dot dark"></div>
          <div class="cadeau">
            <img src="assets/imgs/carte-cadeau.png" alt="">
            Ordinateur portable ASUS
            <aside>Encore 5 produits disponibles</aside>
          </div>
        </div>
        <div class="progress-bar">
          <div class="progress" style="height: 68%"></div>
        </div>
      </div>
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>