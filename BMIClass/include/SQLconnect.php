<?php
   
      try 
      {
          $pdo = new PDO('mysql:host=localhost:3308;dbname=lab06;charset=utf8', 'root', '');
          $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
          //echo 'Database connection established.';
        
      } catch (PDOException $e) {
          echo 'Unable to connect to the database server: ' . $e;
      }
    
?>