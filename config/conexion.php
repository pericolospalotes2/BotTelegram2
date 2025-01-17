<?php
    class Conectar{
        protected $dbh;

        protected function Conexion(){
            try{
                $conectar=$this->dbh = new PDO("mysql:host=localhost;dbname=u701906943_botTelegram","u701906943_bot","RQ&5Sg6-@JN#E8t");
                return $conectar;
            }catch(Exception $e){
                print "Error BD: ".$e;
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>