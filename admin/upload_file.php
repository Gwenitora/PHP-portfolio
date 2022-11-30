<?php
//sauvegarder le fichier dans un dossier spécifique
if ($_FILES['img']['name'] != 'upload/') {
    $destination = "upload/".$_FILES['img']['name']; //dossier "upload"
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination);
} else {
    $destination = "NULL";
}
?>