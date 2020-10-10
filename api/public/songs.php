<?php
        include "../template/layout.html.php";
        $url = "http://localhost/api/public/api.php/";
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_HTTPHEADER,["Content-Type:application/json"]);
        curl_setopt($ch,CURLOPT_CUSTOMREQUEST,"GET");
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        $res = curl_exec($ch);
        $response = json_decode($res,true);
        include "../template/songs.html.php";
       
?>