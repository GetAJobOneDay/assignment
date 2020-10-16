<?php
    class loginControl{
        private $logTable;
        public function __construct($logTable)
        {
            $this->logTable = $logTable; 
        }
        public function login(){
            include "../template/login.html.php";
        }
    }
?>