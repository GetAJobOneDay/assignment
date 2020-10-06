<?php
    include "../includes/databaseConnection.php";
    if(!empty($_POST["topic"]) &&!empty($_POST["name"]) && !empty($_POST["detail"])){
        $name =$_POST["name"];
        $topic = $_POST["topic"];
        $det = $_POST["detail"];
        $query =array("qno"=>null,"qtopic"=>$topic,"qdetail"=>$det,"qname"=>$name,"qcount"=>0);
        add_q($pdo,$query);
        header("Location:questions.php");
    }
    include "../templates/question.html.php";
    
?>