<?php 

require_once "config.php";

$sql = "INSERT INTO users(name, password, email) VALUES(:name, :password, :email)";
$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> $_POST['password'],
	':email'   => $_POST['email']
);
$pre = $pdo->prepare($sql);
$pre->execute($dataBinded);

//require_once "go-back.php";
?>