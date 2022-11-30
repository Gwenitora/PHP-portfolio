<?php

if (!isset($_SERVER['HTTP_REFERER'])){
    header("Location: index.php");
}else {
    header("Location: ".$_SERVER['HTTP_REFERER']);
}

exit();
?>