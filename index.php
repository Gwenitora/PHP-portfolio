<?php
include 'include.php';
headerPage();
?>
<?php
$sql = "SELECT id, name, email, img, admin, as_portfolio, description FROM users WHERE as_portfolio = 1 " ; 
$pre = $pdo->prepare($sql); 
$pre->execute();
$data = $pre->fetchAll(PDO::FETCH_ASSOC);
$a = count($data)
?>
<div class="section" id="team">
      <div class="container">
        <h1 class="center animate__animated animate__rubberBand">Team</h1>
          <div class="row">
            <?php foreach($data as $var) {
              if($var["as_portfolio"] == 1){?>
                <!-- Team -->

                <div class="col s12 m6">
                  <div class="card color perso-2 border-radius">
                    <div class="card-image">
                      <img src="<?php $var['img'] ?>" alt="Photo de <?php echo $var['name'] ?>" class="animate__animated animate__rotateInDownLeft">
                      <a href="./info-gwendal.php" class="halfway-fab btn-floating pulse orange">
                        <i class="material-icons">check</i>
                      </a>
                    </div>
                    <div class="card-content">
                      <span class="card-title"><?php echo $var['name']?></span>                                        
                      <p> <?php echo $var['description'] ?>
                        <!-- Développeur depuis la 5ème, je suis aujourd'hui dans une école de programmation dans le jeu vidéo très
                        prestigieuse. j'ai déjà eu l'occasion de finir des projets tels qu'un site pour présenter un jeu, ou
                        encore, un jeu assyncrone fonctionnant sur une calculette. -->
                      </p>
                    </div>
                    <div class="card-action">
                      <a href="./gang-beasts.php">Gang Beasts</a>
                      <a href="./a_mazing.php">A_mazing</a>
                    </div>
                  </div>
                </div>

            <?php }


          }?>

  
        <!-- <div class="col s12 m6">
          <div class="card color perso-2 border-radius ">
            <div class="card-image">
              <img src="img/ewen.jpg" alt="Photo de Ewen Beaufils" class="animate__animated animate__rotateInDownRight">
              <a href="./info-ewen.php" class=" halfway-fab btn-floating pulse orange">
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
              <a href="./rocket-league.php">Rocket League</a>
              <a href="./pacman.php">PacMan</a>
            </div>
          </div>
        </div> --> 
 
      </div>
    </div>
  </div> 

<?php
footerPage();
