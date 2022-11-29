<?php
include 'include.php';
require_once "config.php";
headerPage();
?>
    <!-- Content -->
    <div class="section">
      <div class="container">
        <h1 class="center animate__animated animate__rubberBand">Projet A_Mazing</h1>
        <img class="responsive-img center-box border-radius animate__animated animate__bounceIn" src="./img/a_mazing-02.jpg" alt="Image du site A_Mazing">
        <div class="row color perso-2 border-radius project-skill">
          <p class="col s12 center">Ce projet était un projet personel. L'objectif était de faire un jeu multijoueurs asyncrone sans pouvoir relier les appareils.</p>
          <div class="col s12 m4 offset-m1 center color perso-1 border-radius">
            <i class="fa-solid fa-code project-icons"></i>
            <h2 class="animate__animated animate__bounceInLeft">Skills</h2>
            <ul>
              <li class="animate__animated animate__bounceInLeft"><i class="fa-brands fa-python"></i> Phython</li>
            </ul>
          </div>
          <div class="col s12 m4 offset-m2 center color perso-1 border-radius">
            <i class="fa-brands fa-connectdevelop project-icons"></i>
            <h2 class="animate__animated animate__bounceInRight">Soft Skills</h2>
              <ul>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-arrows-turn-to-dots"></i> Génération de labyrinthe parfait</li>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-seedling"></i> Utiliser un système de seed</li>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-calculator"></i> Fonctionne sur une calculatrice</li>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-align-justify"></i> Nombre de ligne limité</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

<?php footerPage() ?>