<?php
include 'include.php';
require_once "action/config.php";
headerPage();
?>   
    <!-- Content -->
    <div class="section">
      <div class="container">
        <h1 class="center animate__animated animate__rubberBand">Projet Rocket League</h1>
        <img class="responsive-img center-box border-radius animate__animated animate__bounceIn" src="./img/rocket-league-02.jpg" alt="Image du site Rocket League">
        <div class="row color perso-2 border-radius project-skill">
          <p class="col s12 center">Ce projet était un travail en binôme, où l'objectif était de créer un site en html & css pour présenter sont jeu préférer.</p>
          <div class="col s12 m4 offset-m1 center color perso-1 border-radius">
            <i class="fa-solid fa-code project-icons"></i>
            <h2 class="animate__animated animate__bounceInLeft">Skills</h2>
            <ul>
              <li class="animate__animated animate__bounceInLeft"><i class="fa-brands fa-html5"></i> HTML</li>
              <li class="animate__animated animate__bounceInLeft"><i class="fa-brands fa-css3-alt"></i> CSS</li>
              <li class="animate__animated animate__bounceInLeft"><i class="fa-solid fa-filter"></i> SEO</li>
            </ul>
          </div>
          <div class="col s12 m4 offset-m2 center color perso-1 border-radius">
            <i class="fa-brands fa-connectdevelop project-icons"></i>
            <h2 class="animate__animated animate__bounceInRight">Soft Skills</h2>
              <ul>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-people-group"></i> Travail en équipe</li>
                <li class="animate__animated animate__bounceInRight"><i class="fa-brands fa-html5"></i> Création d'une page web</li>
                <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-pen-nib"></i> Design page web</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    
<?php footerPage() ?>