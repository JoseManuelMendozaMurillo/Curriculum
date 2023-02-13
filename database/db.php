<?php

    class db{
        private $dsn = "mysql:host=localhost;dbname=";
        private $user;
        private $password;

        public $connection;

        public function __construct($nameDB, $user, $password){
            $this->dns = $this->dns.$nameDB;
            $this->user = $user;
            $this->password = $password;

            try{
                $this->public = new PDO($this->dns, $this->user, $this->password);
            }catch(PDOException $e){
                echo $e->getMessage();
                die();
            }

            return $this->connection;
        } 

    }    

?>


