<!DOCTYPE html>

<html lang="fr">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Page de présentation de Ewen Beaufils">
    <title>Ewen - Portfolio Gwendal et Ewen</title>
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
    <div class="section">
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
  
      <!-- Infos -->
      <div class="container">
        <div class="row">
          <img class="col s12 m5 border-radius responsive-img animate__animated animate__bounceInLeft" src="../img/ewen.jpg" alt="Photo de Ewen Beaufils">
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