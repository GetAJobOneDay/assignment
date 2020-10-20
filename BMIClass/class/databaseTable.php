<?php
    class databaseTable{
        private $pdo;
        private $table;
        private $key;
        public function __construct($pdo,$table,$key){
                $this->pdo = $pdo;
                $this->table= $table;
                $this->key = $key;
        }
        public function total()
        {
            $arg = "select name,weight,height,BMI from BMi";
        $all = $this->pdo->query($arg)->fetchAll(PDO::FETCH_ASSOC);
        return $all;;
        }
            public function insert($query){
                $syntax = "insert into BMI(id,name,height,weight,BMI) values (:id,:name,:height,:weight,:BMI)";
                $this->pdo->prepare($syntax)->execute($query);
                header("Location: ../public/index.php?action=home");
            
        }
        function showBMI(){
            $query ="select count(*) from BMI";
            $do =$this->pdo->query($query);
            $do=$do->fetchAll(PDO::FETCH_ASSOC);
            return $do[0];
        }
    }
?>