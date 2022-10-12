<?php
    include('credentials.php');

    class Connection{
        public static function Connection(){
            try{
                $Connection = new PDO("pgsql:host=". SERVER. ";port=". PORT. ";dbname=". DBNAME, USER, PASSWORD);
                $Connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                

            }catch(Exception $e){
                die("Error de conexion" . $e->getMessage());
            }
        return $Connection;  
    }
    }
?>