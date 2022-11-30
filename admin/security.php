<?php

if(!$_SESSION["user"]["admin"] == 1 || !isset($_SESSION["user"])){
    require_once "../action/go-back.php";
}

?>