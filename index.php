<?php
include 'include.php';
headerPage();
?>

  <!-- Team -->
  <div class="section" id="team">
    <div class="container">
      <h1 class="center animate__animated animate__rubberBand">Team</h1>
      <div class="row">

        <div class="col s12 m6">
          <div class="card color perso-2 border-radius">
            <div class="card-image">
              <img src="img/gwendal.jpg" alt="Photo de Gwendal Acquart--Reylans" class="animate__animated animate__rotateInDownLeft">
              <a href="html/info-gwendal.php" class="halfway-fab btn-floating pulse orange">
                <i class="material-icons">check</i>
              </a>
            </div>
            <div class="card-content">
              <span class="card-title">Gwendal ACQUART--REYLANS</span>
              <p>
                Développeur depuis la 5ème, je suis aujourd'hui dans une école de programmation dans le jeu vidéo très
                prestigieuse. j'ai déjà eu l'occasion de finir des projets tels qu'un site pour présenter un jeu, ou
                encore, un jeu assyncrone fonctionnant sur une calculette.
              </p>
            </div>
            <div class="card-action">
              <a href="html/gang-beasts.php">Gang Beasts</a>
              <a href="html/a_mazing.php">A_mazing</a>
            </div>
          </div>
        </div>

        <div class="col s12 m6">
          <div class="card color perso-2 border-radius ">
            <div class="card-image">
              <img src="img/ewen.jpg" alt="Photo de Ewen Beaufils" class="animate__animated animate__rotateInDownRight">
              <a href="html/info-ewen.php" class=" halfway-fab btn-floating pulse orange">
                <i class="material-icons">check</i>
              </a>
            </div>
            <div class="card-content">
              <span class="card-title">Ewen BEAUFILS</span>
              <p>
                Je développe depuis la première (au Lycée). Je suis aujourd'hui dans une école de programmation dans le
                jeu vidéo très prestigieuse nommée Gaming Campus. J'ai déjà eu l'occasion de finir des projets tels
                qu'un site pour présenter un jeu, ou encore, un jeu que tout le monde connait du nom de PacMan.
              </p>
            </div>
            <div class="card-action">
              <a href="html/rocket-league.php">Rocket League</a>
              <a href="html/pacman.php">PacMan</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

<?php
footerPage();