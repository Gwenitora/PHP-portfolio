<?php 

require_once "config.php";

$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> "€df:gù*:dcv65zefr53é#24.'".$_POST['password']
);


$sql = "SELECT id, name, email, img, admin, as_portfolio FROM users WHERE name = :name AND password = SHA1(:password)";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);
$user = $pre->fetch(PDO::FETCH_ASSOC);


if (empty($user)) {
    echo "<script>alert(\"Votre nom d'utilisateur ou votre mot de passe est erroné \")</script>";
}else{
    $_SESSION['user'] = $user;
    $_SESSION['toast'][] = [
        'text' => 'Bienvenue '.$_SESSION['user']['name'] ,
        'classes' => $greenToast
    ];
    require_once "go-back.php";
}

?>