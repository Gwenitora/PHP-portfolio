<?php 

require_once "config.php";

$_SESSION['toast'][] = [
    'text' => 'Bienvenue'.$_SESSION['user']['name'] ,
    'classes' => $greenToast
];
unset($_SESSION["user"]);

require_once "go-back.php";

?>