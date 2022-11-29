<?php 

require_once "config.php";
require_once  "security.php";

$sql = "DELETE FROM users WHERE id = :id";

$dataBinded=array(
    ':id'   => $_POST['id'],
);

$pre = $pdo->prepare($sqlEmail);
$pre->execute($dataBindedEmail);

require_once "go-back.php";

?>