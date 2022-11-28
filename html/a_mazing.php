<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Page de présentation du projet A_Mazing de Gwendal Acquart--Reylans.">
    <title>A_Mazing - Gwendal - Portfolio Gwendal et Ewen</title>
    <link rel="shortcut icon" href="../img/title.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link href="../css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  </head>
  
  <body class="color perso-1">
    <!-- NavBar -->
      <nav class="color perso-2 z-depth-0">
        <div class="nav-wrapper container">
          <a href="" class="brand-logo">Portfolio</a>
          <a href="#" data-target="mobile-links" class="sidenav-trigger">
            <i class="material-icons">menu</i>  
          </a>
          <ul class="right hide-on-med-and-down">
            <li><a href="../index.php"><i class="material-icons left">home</i>Home</a> </li>
            <li><a href="#contact" class="modal-trigger"><i class="material-icons left">phone</i>Contact</a> </li>
            <li><a href="#" class="dropdown-trigger" data-target="dropdown-team"><i class="material-icons left">group</i>Team</a> </li>
          </ul>

        <!-- Dropdown menu -->
        <ul id="dropdown-team" class="dropdown-content color perso-2">
          <li><a href="../index.php#team" class="white-text">Team</a></li>
          <li><a href="info-gwendal.php" class="white-text">Gwendal</a></li>
          <li><a href="info-ewen.php" class="white-text">Ewen</a></li>
        </ul>
        </div>
      </nav>
    <header>
      <div class="parallax-container">
        <div class="parallax"><img src="../img/image-nav-bar.jpg" alt="Voie lactée en parallaxe"></div>
      </div>
    </header>
    <ul class="sidenav color perso-2" id="mobile-links">
      <li><a href="../index.php" onclick="sidenavClose()" class="white-text"><i class="material-icons left">home</i>Home</a> </li>
      <li><a href="../index.php#contact" onclick="sidenavClose()" class="modal-trigger white-text"><i class="material-icons left">phone</i>Contact</a> </li>
      <li><a href="../index.php#team" onclick="sidenavClose()" class="white-text"><i class="material-icons left">group</i>Team</a> </li>
    </ul>

    <!-- Contact -->
    <div class="container">
      <div class="modal color perso-2 border-radius" id="contact">
        <div class="row">
          <div class="input-field col s12 l5">
            <i class="material-icons prefix">account_circle</i>
            <input type="text" id="name-input" class="name">
            <label for="name-input">NOM Prénom</label>
          </div>
          <div class="input-field col s12 l7">
            <i class="material-icons prefix">mail</i>
            <input type="email" id="email-input" class="email">
            <label for="email-input">Email</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">star</i>
            <input type="text" id="object-input" class="object">
            <label for="object-input">Sujet</label>
          </div>
          <div class="input-field col s12">
            <i class="material-icons prefix">textsms</i>
            <textarea id="message-input" class="message materialize-textarea" ></textarea>
            <label for="message-input">Message</label>
          </div>
        </div>
        <div class="modal-close color perso-2 center" id="suprise">
          <button class="btn waves-effect waves-light">
            <span>Envoyer</span>
            <i class="material-icons right">send</i>
          </button>
        </div>
        
      </div>
    </div>
    
    <!-- Content -->
    <div class="section">
      <div class="container">
        <h1 class="center animate__animated animate__rubberBand">Projet A_Mazing</h1>
        <img class="responsive-img center-box border-radius animate__animated animate__bounceIn" src="../img/a_mazing-02.jpg" alt="Image du site A_Mazing">
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
    
    <!-- Footer -->
    <footer class="page-footer color perso-2">
      <div class="footer-copyright">
        <div class="container">
          <p class="left">&copy; 2022 Copyright ACQUART--REYLANS Gwendal</p>
          <p class="right">&copy; 2022 Copyright BEAUFILS Ewen</p>
        </div>
      </div>  
    </footer>

      <!-- Easter Egg -->
    <div class="easter-gif border-radius">
      <img src="../img/hastley-rick.gif" alt="you rick rolled">
    </div>

    <!-- Scripts js -->
    <script src="https://kit.fontawesome.com/63d128608a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="../scripts/script.js"></script>
    
  </body>
</html>