<?php
include 'include.php';
headerPage();

if (!isset($_GET['id'])) {
    require_once "go-back.php";
}

$sql = "SELECT id, name, img, description FROM users WHERE as_portfolio = 1 AND id=:id " ; 
$dataBinded=array(
    ':id'   => $_GET['id']
);
$pre = $pdo->prepare($sql); 
$pre->execute($dataBinded);
$card = $pre->fetchAll(PDO::FETCH_ASSOC);

if (count($card)!=1) {
    require_once "go-back.php";
}
$card = $card[0];

?>

    <!-- Infos -->
    <div class="container">
        <div class="row">
            <img class="col s12 m5 border-radius responsive-img animate__animated animate__bounceInLeft" src="<?= $card['img'] ?>" alt="Photo de <?= $card['name'] ?>">
            <div class="col s12 l6 offset-l1 m7">
                <h1 class="center animate__animated animate__rubberBand"><?= $card['name'] ?></h1>
                <p class="animate__animated animate__zoomInUp"><?= $card['description'] ?></p>
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

<?php
footerPage();
