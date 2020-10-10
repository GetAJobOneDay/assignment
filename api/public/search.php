<?php
     include "../template/layout.html.php";
     if(isset($_POST["song"])){
         $id = $_POST["song"];
     $url = "http://localhost/api/public/api.php/$id";
     $ch = curl_init();
     curl_setopt($ch,CURLOPT_URL,$url);
     curl_setopt($ch,CURLOPT_HTTPHEADER,["Content-Type:application/json"]);
     curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
     curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
     $res = curl_exec($ch);
     $response = json_decode($res,true); 
        echo "this is your song <br>";
        echo $response["songname"];
     }else{
        include "../template/search.html.php"; 
     }
     
?>