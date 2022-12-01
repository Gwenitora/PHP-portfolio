<?php require_once "action/config.php"; ?><?php
include 'include.php';
headerPage();

$sql = "SELECT * FROM projects as p join users as u on u.id = p.id_user where u.as_portfolio = 1";
$pre = $pdo->prepare($sql);
$pre->execute();
$projects = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT  * FROM skills WHERE soft = 0";
$pre = $pdo->prepare($sql);
$pre->execute();
$skills = $pre->fetchAll(PDO::FETCH_ASSOC);

$sql = "SELECT  * FROM skills WHERE soft = 1";
$pre = $pdo->prepare($sql);
$pre->execute();
$softSkills = $pre->fetchAll(PDO::FETCH_ASSOC);

?>
    <!-- Content -->
    <div class="section">
      <div class="container">
        <?php foreach( $projects as $project) { ?>

            <h1 class="center animate__animated animate__rubberBand"><?= $project["title"]?></h1>
            <img class="responsive-img center-box border-radius animate__animated animate__bounceIn" src="<?= $project["img_description"]?>" alt="Image du site Pac Man">
            <div class="row color perso-2 border-radius project-skill">
            <p class="col s12 center"><?= $project["description"]?></p>
            <div class="col s12 m4 offset-m1 center color perso-1 border-radius">
                <i class="fa-solid fa-code project-icons"></i>
                <h2 class="animate__animated animate__bounceInLeft">Skills</h2>
                <ul>
                <?php foreach( $skills as $skill) { ?>
                    <li class="animate__animated animate__bounceInLeft"><i class="fa-solid fa-terminal"></i> <?= $skill["title"]?></li>
                    <?php } ?>
                </ul>
            </div>
            <div class="col s12 m4 offset-m2 center color perso-1 border-radius">
                <i class="fa-brands fa-connectdevelop project-icons"></i>
                <h2 class="animate__animated animate__bounceInRight">Soft Skills</h2>
                <ul>
                    <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-gears"></i> JAM</li>
                    <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-user"></i> Travail en solo </li>
                    <li class="animate__animated animate__bounceInRight"><i class="fa-solid fa-ghost"></i> Création d'un jeu de A-Z</li>
                </ul>
            </div>
            </div>
            <?php } ?>
        </div>
    </div>
    
<?php footerPage() ?>