<?php
    include "../include/databaseConnection.php";
    include "../include/databaseFunction.php";
    $db = new dbFunc($pdo);
    $uri = parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH);
    $uri = explode("/",$uri);
    if($_SERVER["REQUEST_METHOD"]=="GET"){
        $point = $uri[4];
        if($point==''){
            $res= $db->showAll();
            $res = json_encode($res,true);
            echo $res;
        }else{
            $res = $db->search($point);
            $res = json_encode($res,true);
            echo $res;
        }
    }else if($_SERVER["REQUEST_METHOD"]=="POST"){
        $point =  (array)json_decode(file_get_contents("php://input"),true);
        $arr = ["id"=>null,"songname"=>$point["songname"]];
        $res = $db->add($arr);
    }
    
?>