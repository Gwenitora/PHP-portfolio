<?php
include 'include.php';
require_once "config.php";
headerPage();
?>  
    <!-- Infos -->
    <div class="section">
      <div class="container">
        <div class="row">
          <img class="col s12 m5 border-radius responsive-img animate__animated animate__bounceInLeft" src="./img/gwendal.jpg" alt="Photo de Gwendal Acquart--Reylans">
          <div class="col s12 l6 offset-l1 m7">
            <h1 class="center animate__animated animate__rubberBand">ACQUART--REYLANS Gwendal</h1>
            <p class="animate__animated animate__zoomInUp">
              Développeur depuis la 5ème, je suis aujourd'hui dans une école de programmation dans le jeu vidéo très prestigieuse. j'ai déjà eu l'occasion de finir des projets tels qu'un site pour présenter un jeu, ou encore, un jeu assyncrone fonctionnant sur une calculette.<br><br>
            </p>
            <div class="center">
              <a href="https://www.linkedin.com/in/gwendal-a-a695b1183/" class="btn-floating linkedin animate__animated animate__bounceInUp" target="_blank" rel="nofollow">
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
        <div class="carousel-item white-text gb">
          <div></div>
          <h2>Gang Beast</h2>
          <p class="white-text">Ce site est une présentation du jeu Gang Beasts en html css, c'est aussi l'un de mes premiers site</p>  
        </div>
        <div class="carousel-item white-text am">
          <div></div>
          <h2>A_Mazing</h2>
          <p class="white-text">Jeu asyncrone coder sur une calculette, et fonctionne avec une seed pour relier les deux joueurs</p>
        </div>
      </div>
    </div>

    
<?php footerPage() ?>