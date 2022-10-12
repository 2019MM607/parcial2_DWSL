<?php
    class User{
        private $db;
        private $users;


        public function __construct(){
            require_once("connection.php");
            $this->db = Connection::Connection();
            $this->users = array();
        }

       public function getAll(){
            $query=$this->db->query("SELECT * FROM usuario");
            while($results=$query->fetch(PDO::FETCH_ASSOC)){
            $this->users[]=$results;
            }
            return $this->users;
        }
    }
 ?>