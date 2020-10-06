<?php
    include "../includes/databaseConnection.php";
    if($_GET["id"]!=null){
        $idQuery= $_GET["id"];
        $q =select_q($pdo,$idQuery);
        include "../templates/detail.html.php";
    }
?>