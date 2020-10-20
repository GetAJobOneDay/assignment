<?php
    include "../class/databaseTable.php";
    include "../controller/BMIcontroller.php";
    include "../include/SQLconnect.php";
    include "../class/loginTable.php";
    include "../controller/loginController.php";
    $table = new databaseTable($pdo,"BMI","id");
    $db = new BMIcontroller($table);
    $loginT = new login($pdo);
    $login = new loginControl($loginT);
    if(isset($_GET["action"])){
        $location = isset($_GET["action"])?$_GET["action"]:"home";
      if($location=="list"){
            $db->list();
      } else if($location=="add"){
            $db->add();
      }else if($location=="register"){
          $login->register();
      }else  if($location=="login") {
        $login->login();
      }else if($location=="home"){
        $db->home();
      }else if($location == "logout"){
        $login->logout();
      }
    }else{
      include "../template/home.html.php";
    }
?>