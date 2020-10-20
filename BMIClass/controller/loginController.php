<?php
    class loginControl{
        private $logTable;
        public function __construct($logTable)
        {
            $this->logTable = $logTable; 
        }
        public function login(){
            include "../template/login.html.php";
            if(!(empty($_POST["email"]) || empty($_POST["password"]))){
                $query = array($_POST["email"],$_POST["password"]);
                $isAcc = $this->logTable->isAccessable($query);
                if($isAcc){
                     session_start();
                     $_SESSION["auth"] = true;
                     $_SESSION["user"] = $_POST["email"];
                     echo "login success";
                }else{
                  $output=  "Failed";
                include "../template/statusUser.html.php";
                }
            }else{
                $output=  "Failed";
                include "../template/statusUser.html.php";
            }
        }
        function register(){
            include_once "../template/laylay.html.php";
            include_once "../template/register.html.php";
            $i=0;
            $error =array();
            if(empty($_POST["email"])){
                $error[$i] = "email is required";
                $i++;
            }
            if(empty($_POST["name"])){
                $error[$i] = "name is required";
                $i++;
            }
            if(empty($_POST["password"])){
                $error[$i] = "password is required";
                $i++;
            }
            if(!(empty($_POST["email"]) || empty($_POST["name"]) || empty($_POST["password"]))){
                $name =$_POST["name"];
                $email =$_POST["email"];
                if(filter_var($email,FILTER_VALIDATE_EMAIL)){
                     $password = password_hash($_POST["password"],PASSWORD_DEFAULT);
                $query =array("id"=>null,"Uname"=>$name,"email"=>$email,"password"=>$password);
                if($this->logTable->isExist($email)){
                    $output = "Failed";
                    include_once "../template/statusUser.html.php";
                }else{
                    $this->logTable->register($query);
                    $output = "Success";
                    include_once "../template/statusUser.html.php";
                }
            }else{
                $output = "Failed";
                include "../template/statusUser.html.php";
            }
            }else{
                $output = "Failed";
                include "../template/statusUser.html.php";
            }
        }
        function logout(){
            $this->logTable->logout();
        }
    }
?>