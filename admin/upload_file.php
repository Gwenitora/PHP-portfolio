<?php
//sauvegarder le fichier dans un dossier spécifique
if ($_FILES['img']['name'] != '') {
    $destination = "upload/".$_FILES['img']['name']; //dossier "upload"
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination);
} else {
    $dataBinded=array(
        ':id'   => $_POST['id']
    );
    $sql = "SELECT img FROM users WHERE id=:id";
    $pre = $pdo->prepare($sql);
    $pre->execute($dataBinded);
    $img = $pre->fetch(PDO::FETCH_ASSOC);
    $destination = $img['img'];
}
?>