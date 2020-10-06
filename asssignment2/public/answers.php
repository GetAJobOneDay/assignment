<?php
    include "../includes/databaseConnection.php";
    if($_POST["ans"]!=null && $_POST["ans_name"]!=null){
        $ans = $_POST["ans"];
        $name = $_POST["ans_name"];
        $qno = $_POST["qno"]; 
        $query = array("aqno"=>null,"ano"=>$qno,"adetail"=>$ans,"aname"=>$name);
        insert_ans($pdo,$query);  
        header("Location: ../public/details.php?id=$qno");
    }else{
        header("Location: ../public/questions.php");
    }
    
?>