<?php
try{
    $pdo = new PDO("mysql:host=localhost:3308;dbname=assignment","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    include "../includes/sqlFunction.php";
}catch(PDOException $e){
    $e = "can't connect with database";
}
    
?>