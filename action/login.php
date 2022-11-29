<?php 

require_once "config.php";

$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> "€df:gù*:dcv65zefr53é#24.'".$_POST['password']
);


$sql = "SELECT id, name, email, img, admin, as_portfolio FROM users WHERE name = :name AND password = SHA1(:password)";
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

require_once "go-back.php";

?>