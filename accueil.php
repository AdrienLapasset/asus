<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('accueil')
?>

<?php include("partials/header-menu.php"); ?>

<main class="acceuil">
  <div class="container">

    <!-- Desktop Layout -->
    <div class="desktop">
      <div class="left-col">
        <div class="text-container">
          <h1 class="c-title">Bonjour Alexandre!</h1>
          <p>Il vous reste à cumuler <b class="blue-text"> 50 points</b> avant de débloquer votre prochain cadeau ! </p>
          <a class="c-btn c-btn-primary">Enregirstrer une nouvelle action <img class="ms-2" src="assets/icons/arrow.svg" alt="arrow"></a>
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
              500 points
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
              250 points
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
              150 points
            </div>
            <div class="dot dark"></div>
            <div class="cadeau">
              <img src="assets/imgs/carte-cadeau.png" alt="">
              Ordinateur portable ASUS
              <aside>Encore 5 produits disponibles</aside>
            </div>
          </div>
          <div class="progress-bar">
            <!-- Progress = style="height: 'progress'%" -->
            <div class="progress" style="height: 68%"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile Layout -->
    <div class="mobile">
      <h1 class="c-title">Bonjour Alexandre!</h1>
      <p>Il vous reste à cumuler <b class="blue-text"> 50 points</b> avant de débloquer votre prochain cadeau ! </p>
      <div class="progress-container">
        <div class="votre-niveau-container" style="left: 68%;">
          <!-- Progress = style="left: 'progress'%" -->
          <div class="votre-niveau">
            Votre niveau
          </div>
        </div>
        <div class="progress-bar">
          <!-- Progress = style="width: 'progress'%" -->
          <div class="progress" style="width: 68%"></div>
        </div>
        <div class="paliers-container">
          <div class="palier dark">
            150<br />pts
          </div>
          <div class="palier dark">
            250<br />pts
          </div>
          <div class="palier dark">
            500<br />pts
          </div>
          <div class="palier dark">
            750<br />pts
          </div>
          <div class="palier dark">
            1000<br />pts
          </div>
        </div>
      </div>

      <div class="cadeau-container">
        <div>
          Ordinateur portable ASUS
          <div class="disponible">
            Encore 5 produits disponibles
          </div>
        </div>
        <div class="cadeau-img">
          <img class="img-fluid" src="assets/imgs/carte-cadeau.png" alt="">
        </div>
        250 pts
      </div>
      <div class="cadeau-container">
        <div>
          Ordinateur portable ASUS
          <div class="disponible">
            Encore 5 produits disponibles
          </div>
        </div>
        <div class="cadeau-img">
          <img class="img-fluid" src="assets/imgs/carte-cadeau.png" alt="">
        </div>
        250 pts
      </div>
      <div class="cadeau-container">
        <div>
          Ordinateur portable ASUS
          <div class="disponible">
            Encore 5 produits disponibles
          </div>
        </div>
        <div class="cadeau-img">
          <img class="img-fluid" src="assets/imgs/carte-cadeau.png" alt="">
        </div>
        250 pts
      </div>
      <div class="cadeau-container">
        <div>
          Ordinateur portable ASUS
          <div class="disponible">
            Encore 5 produits disponibles
          </div>
        </div>
        <div class="cadeau-img">
          <img class="img-fluid" src="assets/imgs/carte-cadeau.png" alt="">
        </div>
        250 pts
      </div>
      <a class="mt-5 c-btn c-btn-primary">Enregirstrer une nouvelle action <img class="ms-2" src="assets/icons/arrow.svg" alt="arrow"></a>
      <img src="assets/imgs/bg-home-mobile.jpg" alt="">
    </div>
  </div>

</main>

<?php include 'partials/footer.php'; ?>