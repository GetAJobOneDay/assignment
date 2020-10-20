<?php
    class BMIcontroller{
        private $db;
        public function __construct($db)
        {
            $this->db = $db;
        }
     function home(){
        include "../template/home.html.php";
    }
    function list(){
        $users = $this->db->showBMI();
        $number =$users["count(*)"];
        $allUser = $this->db->total();
        include "../template/laylay.html.php";
        include "../template/BMIs.html.php";
    }
    function add(){
        include "../template/laylay.html.php";
        include "../template/addBMI.html.php";
        if(!empty($_POST["name"]) && !empty($_POST["name"]) &&!empty($_POST["name"])){
            $name = $_POST["name"];
            $h = $_POST["h"];
            $w = $_POST["w"];
            $bmi = ($h*703/($w*$w));
            $temp = array("id"=>null,":name"=>$name,"height"=>$h,"weight"=>$w,"BMI"=>$bmi);
            $this->db->insert($temp);
        }
    }   
}
    
?>