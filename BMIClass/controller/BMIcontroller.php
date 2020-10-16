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
    function register(){
        include_once "../template/laylay.html.php";
        include_once "../template/register.html.php";
        $i=0;
        $error =array();
        if(!isset($_POST["email"])){
            $error[$i] = "email is required";
            $i++;
        }else if(!isset($_POST["name"])){
            $error[$i] = "name is required";
            $i++;
        }else if(!isset($_POST["password"])){
            $error[$i] = "password is required";
            $i++;
        }else{
            $name =$_POST["name"];
            $email =$_POST["email"];
            $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
            $query =array("id"=>null,"Uname"=>$name,"email"=>$email,"password"=>$password);
            if($this->db->isExist($email)){
                $output = "Failed";
                include_once "../template/statusUser.html.php";
            }else{
                $this->db->register($query);
                $output = "Success";
                include_once "../template/statusUser.html.php";
            }
            
                 
             
        }
    }   
}
    
?>