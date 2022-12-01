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

$sql = "SELECT p.title, p.description , p.img_carousel, p.img_pres FROM projects as p join users as u on u.id = p.id_user where u.as_portfolio = 1 and p.id = :id";
$dataBinded=array(
    ':id'   => $_GET['id']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$projects = $pre->fetch(PDO::FETCH_ASSOC);


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
        <?php foreach($card as $user) {
            if ($user['id'] ) { ?>
        <div class="carousel-item white-text <?php echo "$projects['title']" ?>">
            <div></div>
            <h2><?php echo "$projects['title']" ?></h2>
            <p class="white-text"><?php echo "$projects['description']" ?></p>  
        </div>
    </div>
<?php }
} ?>


<?php
footerPage();
