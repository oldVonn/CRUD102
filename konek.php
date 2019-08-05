<?php
    require_once('server.php');

    Class DB{
        public static function db_con(){
            $con = new mysqli(DBHOST,DBUSER,DBPASS,DBNAME);
            if(!$con){
                die('Connection Failed:'.$con->connect_error);
            }       
            return $con;
        }
    }
?>