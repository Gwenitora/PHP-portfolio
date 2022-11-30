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
                      <img src="<?php echo $var['img'] ?>" alt="Photo de <?php echo $var['name'] ?>" class="animate__animated animate__rotateInDownLeft">
                      <a href="./info-gwendal.php" class="halfway-fab btn-floating pulse orange">
                        <i class="material-icons">check</i>
                      </a>
                    </div>
                    <div class="card-content">
                      <span class="card-title"><?php echo $var['name']?></span>                                        
                      <p> <?php echo $var['description'] ?></p>
                    </div>
                    <div class="card-action">
                      <a href="./gang-beasts.php">Gang Beasts</a>
                      <a href="./a_mazing.php">A_mazing</a>
                    </div>
                  </div>
                </div>

            <?php }


          }?>

      </div>
    </div>
  </div> 

<?php
footerPage();
