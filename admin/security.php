<?php

if(!$_SESSION["user"]["admin"] == 1 || !isset($_SESSION["user"])){
    require_once "go-back.php";
}

?>