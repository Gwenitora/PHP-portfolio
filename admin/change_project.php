<?php
require_once "../action/config.php";
require_once "security.php";
require_once "upload_file.php";

if (isset($_POST['id_user'])) {
    $dataBinded=array(
        ':id'   => $_POST['id'],
        ':id_user'   => $_POST['id_user']
    );
    $sql = "UPDATE `projects` SET id_user=:id_user WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}

if (isset($destination)) {
    $dataBinded=array(
        ':id'   => $_POST['id'],
        ':img_carousel'   => $destination
    );
    $sql = "UPDATE `projects` SET img_carousel=:img_carousel WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}
if (isset($destination)) {
    $dataBinded=array(
        ':id'   => $_POST['id'],
        ':img_pres'   => $destination
    );
    $sql = "UPDATE `projects` SET img_pres=:img_pres WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}

if (isset($_POST['title'])) {
    $dataBinded=array(
        ':id'   => $_POST['id'],
        ':title'   => $_POST['title']
    );
    $sql = "UPDATE `projects` SET title=:title WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}

if (isset($_POST['description'])) {
    $dataBinded=array(
        ':id'   => $_POST['id'],
        ':description'   => $_POST['description']
    );
    $sql = "UPDATE `projects` SET description=:description WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
}

$_SESSION['toast'][] = [
    'text' => 'Projet sauvgardé' ,
    'classes' => $_SESSION["toastConfig"]["greenToast"]
];
require_once "../action/go-back.php";