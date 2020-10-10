<?php
try{
    $pdo = new PDO("mysql:host=localhost:3308;dbname=api","root","");
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    $e = "can't connect with database";
}
    
?>