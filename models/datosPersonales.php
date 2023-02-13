<?php
    require_once "../database/db.php";

    class DatosPersonales{

        private $db;

        public function __construct(){
            $this->db = new db("redi", "root", "19630306");
        }

        public function getAll(){
            // Aplicar el patron de diseño singleton
            try{
                $query = "Select * From DatosPersonales";
                $data = $this->db->fetch();
                
            }catch(Exception $e){
                $response = $e->getMessage();
            }

            return $response; 
        }


    }

?>