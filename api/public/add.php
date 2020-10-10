<?php
include "../template/layout.html.php";
    include_once "../template/add_song.html.php";
    if(isset($_POST["song"])){
        $url = "http://localhost/api/public/api.php/";
        $req = $_POST["song"];
        $reqq = ["songname"=>$req];
        $reqq = json_encode($reqq);
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$reqq);
        curl_setopt($ch,CURLOPT_POST,true);
        $res = curl_exec($ch);
        curl_close($ch);
    }
?>