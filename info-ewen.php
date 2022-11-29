<?php
include 'include.php';
require_once "config.php";
headerPage();
?>
      <!-- Infos -->
      <div class="container">
        <div class="row">
          <img class="col s12 m5 border-radius responsive-img animate__animated animate__bounceInLeft" src="./img/ewen.jpg" alt="Photo de Ewen Beaufils">
          <div class="col s12 l6 offset-l1 m7">
            <h1 class="center animate__animated animate__rubberBand">BEAUFILS Ewen</h1>
            <p class="animate__animated animate__zoomInUp">
              Je développe depuis la première (au Lycée). Je suis aujourd'hui dans une école de programmation dans le jeu vidéo très prestigieuse nommée Gaming Campus. J'ai déjà eu l'occasion de finir des projets tels qu'un site pour présenter un jeu, ou encore, un jeu que tout le monde connait du nom de PacMan.<br><br>
            </p>
            <div class="center">
              <a href="https://www.linkedin.com/in/ewen-beaufils-1a9043252/" class="btn-floating linkedin animate__animated animate__bounceInUp" target="_blank" rel="nofollow">
                <i class="fa-brands fa-linkedin"></i>
              </a>
              <a href="https://projectframeworkcssjs.williamchapron.repl.co/index.php#" class="btn-floating linkedin animate__animated animate__bounceInUp" target="_blank" rel="nofollow">
                <i class="fa-brands fa-discord"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Carousel -->
      <div class="carousel carousel-slider center">
        <div class="carousel-fixed-item center">
          <a class="btn waves-effect white grey-text darken-text-2 btn-change border-radius white-text">En savoir plus</a>
        </div>
        <div class="carousel-item white-text rl">
          <div></div>
          <h2>Rocket League</h2>
          <p class="white-text">Ce site est une présentation du jeu Rocket League en html css, c'est aussi l'un de mes premiers site</p>  
        </div>
        <div class="carousel-item white-text pm">
          <div></div>
          <h2>PacMan</h2>
          <p class="white-text">Jeu où l'on incarne PacMan, on a pour but de récupérer toutes les jetons sans se faire tuer.</p>
        </div>
      </div>
    </div>

<?php footerPage() ?>