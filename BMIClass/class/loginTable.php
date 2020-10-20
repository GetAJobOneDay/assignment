<?php
    class login{
        private $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function register($query){
        
            $arg = "insert into users(id,Uname,email,password) values (:id,:Uname,:email,:password)";
            $this->pdo->prepare($arg)->execute($query);
            
        }
       public function isExist($query){
            $arg = "select * from users where email='$query'";
            $flag = $this->pdo->query($arg)->rowCount();
            $flag>0?false:true;
            return $flag;
       }
       public function isAccessable($query){
           $email = $query[0];
           $password = $query[1];
            $arg = "select * from users where email='$email'";    
            $user = $this->pdo->query($arg)->fetch(PDO::FETCH_ASSOC);
            $count =count($user);
            if($count>0){
                if(password_verify($password,$user["password"])){
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
        public function logout(){
            session_start();
            unset($_SESSION["auth"]);
            unset($_SESSION["user"]);
            header("Location: ../public/index.php?home");
        }
    }
?>