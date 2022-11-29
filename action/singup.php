<?php 

require_once "config.php";

$dataBinded=array(
    ':name'   => $_POST['name'],
    ':password'=> "€df:gù*:dcv65zefr53é#24.'".$_POST['password'],
	':email'   => $_POST['email']
);

$dataBindedName=array(
    ':name'   => $_POST['name']
);

$dataBindedEmail = array(
	':email'   => $_POST['email']
);

$sqlName = "SELECT name FROM users WHERE name = :name";

$preName = $pdo->prepare($sqlName);
$preName->execute($dataBindedName);
$dataName = $preName->fetchAll(PDO::FETCH_ASSOC);

$sqlEmail = "SELECT email FROM users WHERE email = :email";

$preEmail = $pdo->prepare($sqlEmail);
$preEmail->execute($dataBindedEmail);
$dataEmail = $preEmail->fetchAll(PDO::FETCH_ASSOC);

if(count($dataName) == 0 && count($dataEmail) == 0){
	$sql = "INSERT INTO users(name, password, email) VALUES(:name, SHA1(:password), :email)";
	$pre = $pdo->prepare($sql);
	$pre->execute($dataBinded);
	$_SESSION['user'] = $pre->fetch(PDO::FETCH_ASSOC);
}/*else{

}*/

require_once "go-back.php";
?>
