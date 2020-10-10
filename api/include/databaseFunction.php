<?php 
    class dbFunc{
        private $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function add($query){
            $arg = "insert into songs(id,songname) values(:id,:songname)";
            $this->pdo->prepare($arg)->execute($query);
        }
        public function showAll(){
            $arg = "select * from songs";
            $result = $this->pdo->query($arg)->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
        public function search($query){
            $query=str_replace("+"," ",$query);
            $arg = 'select * from songs where songname='."'$query'";
            $result = $this->pdo->query($arg)->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
?>