<?php
//sauvegarder le fichier dans un dossier spécifique
if ($_FILES['img']['name'] != 'upload/') {
    $destination = "upload/".$_FILES['img']['name']; //dossier "upload"
<<<<<<< HEAD
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination);
    



=======
    echo "<pre>";
    print_r($_FILES['img']['tmp_name']);
    echo "</pre>";
    move_uploaded_file($_FILES['img']['tmp_name'],"../".$destination);
} else {
    $destination = "NULL";
}
>>>>>>> 65df56445b16a9427fdd21940c981a3bc3bea6c2
?>