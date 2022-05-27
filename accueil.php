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
          <a class="c-btn c-btn-primary">Enregistrer une nouvelle action <img class="ms-2" src="assets/icons/arrow.svg"
              alt="arrow"></a>
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
            <div class="cadeau">
              <img src="assets/imgs/cadeaux/trottinette 2.png" alt="">
              Trottinette électrique
              <aside>Encore 5
                <span class="blue-text">produits disponibles</span>
              </aside>
              <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
                Commander
              </button>
            </div>
          </div>
          <div class="cadeau-container">
            <div class="points">
              750 points
            </div>
            <div class="dot dark"></div>
            <div class="cadeau">
              <img src="assets/imgs/cadeaux/Zenscreen.png" alt="">
              Zenscreen
              <aside>Encore 5
                <span class="blue-text">produits disponibles</span>
              </aside>
              <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
                Commander
              </button>
            </div>
          </div>
          <div class="cadeau-container">
            <div class="points">
              500 points
            </div>
            <div class="dot dark"></div>
            <div class="cadeau">
              <img src="assets/imgs/cadeaux/ecouteurs sans fil.jpg" alt="">
              Ecouteurs sans fil
              <aside>Encore 5
                <span class="blue-text">produits disponibles</span>
              </aside>
              <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
                Commander
              </button>
            </div>
          </div>
          <div class="cadeau-container">
            <div class="points">
              250 points
            </div>
            <div class="dot dark"></div>
            <div class="cadeau">
              <img src="assets/imgs/carte-cadeau.png" alt="">
              Carte cadeau Illicado
              <aside>Encore 5
                <span class="blue-text">produits disponibles</span>
              </aside>
              <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
                Commander
              </button>
            </div>
          </div>
          <div class="cadeau-container">
            <div class="points">
              150 points
            </div>
            <div class="dot dark"></div>
            <div class="cadeau">
              <img src="assets/logos/ASUS-Business.png" alt="" style="width:160px">
              Pack goodies
              <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
                Commander
              </button>
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
          Pack goodies
          <div class="disponible">
            Encore 5
            <span class="blue-text">produits disponibles</span>
          </div>
          <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
            Commander
          </button>
        </div>
        <div class="cadeau-img">
          <img src="assets/logos/ASUS-Business.png" alt="" style="width:200px">
        </div>
        150 pts
      </div>
      <div class="cadeau-container">
        <div>
          Carte cadeau Illicado
          <div class="disponible">
            Encore 5
            <span class="blue-text">produits disponibles</span>
          </div>
          <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
            Commander
          </button>
        </div>
        <div class="cadeau-img">
          <img src="assets/imgs/carte-cadeau.png" alt="">
        </div>
        250 pts
      </div>
      <div class="cadeau-container">
        <div>
          Ecouteurs sans fil
          <div class="disponible">
            Encore 5
            <span class="blue-text">produits disponibles</span>
          </div>
          <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
            Commander
          </button>
        </div>
        <div class="cadeau-img">
          <img src="assets/imgs/cadeaux/ecouteurs sans fil.jpg" alt="">
        </div>
        500 pts
      </div>
      <div class="cadeau-container">
        <div>
          Zenscreen
          <div class="disponible">
            Encore 5
            <span class="blue-text">produits disponibles</span>
          </div>
          <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
            Commander
          </button>
        </div>
        <div class="cadeau-img">
          <img src="assets/imgs/cadeaux/Zenscreen.png" alt="">
        </div>
        750 pts
      </div>
      <div class="cadeau-container">
        <div>
          Trottinette électrique
          <div class="disponible">
            Encore 5
            <span class="blue-text">produits disponibles</span>
          </div>
          <button type="button" class="" data-bs-toggle="modal" data-bs-target="#commander">
            Commander
          </button>
        </div>
        <div class="cadeau-img">
          <img src="assets/imgs/cadeaux/trottinette 2.png" alt="">
        </div>
        1000 pts
      </div>
      <a class="mt-5 c-btn c-btn-primary">Enregistrer une nouvelle action <img class="ms-2" src="assets/icons/arrow.svg"
          alt="arrow"></a>
      <img src="assets/imgs/bg-home-mobile.jpg" alt="">
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="commander" tabindex="-1" aria-labelledby="commander" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          Êtes vous sure de vouloir commander cette dotation ? Attention si vous commander ce produit vous ne pourrez
          plus participer pour tenter de débloquer une autre dotation.
          <a href="" class="text-blue">(Voir règlement de l’offre)</a>
        </div>
        <div class="modal-footer">
          <button type="button" class="c-btn c-btn-primary">Valider ma commande</button>
          <button type="button" class="c-btn c-btn-secondary" data-bs-dismiss="modal">Annuler</button>
        </div>
      </div>
    </div>
  </div>


</main>

<?php include 'partials/footer.php'; ?>