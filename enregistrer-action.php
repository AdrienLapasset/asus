<?php
function includeHeader($page)
{
  include("partials/head.php");
}
includeHeader('enregistrer-action')
?>
<?php include("partials/header-menu.php"); ?>

<main class="enregistrer-action">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 offset-lg-6">
        <h1>Historique des actions</h1>
        <div class="action">
          <span>Webinar du 16/05/2022</span>
          <span>Validé</span>
          <span>1 point</span>
        </div>
        <div class="action">
          <span>Webinar du 16/05/2022</span>
          <span>Validé</span>
          <span>1 point</span>
        </div>
        <div class="action">
          <span>Webinar du 16/05/2022</span>
          <span>Validé</span>
          <span>1 point</span>
        </div>
        <div class="action">
          <span>Webinar du 16/05/2022</span>
          <span>Validé</span>
          <span>1 point</span>
        </div>
        <div class="action">
          <span>Webinar du 16/05/2022</span>
          <span>Validé</span>
          <span>1 point</span>
        </div>
        <a class="my-5 c-btn c-btn-primary">Enregistrer une nouvelle action <img class="ms-2" src="assets/icons/arrow.svg" alt="arrow"></a>
        <p>Il vous reste à cumuler <span class="blue-text"> 5 points</span> avant de débloquer votre prochain cadeau ! </p>
        <div class="progress-container">
          <div class="progress-bar">
            <!-- Point position = style="left: 'progress'%" -->
            <aside class="points"  style="left: 95%;">95&nbsp;pts</aside>
            <!-- Progress = style="width: 'progress'%" -->
            <div class="progress" style="width: 95%"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <img class="d-lg-none w-100" src="assets/imgs/bg-action-mobile.jpg" alt="">
</main>

<?php include 'partials/footer.php'; ?>