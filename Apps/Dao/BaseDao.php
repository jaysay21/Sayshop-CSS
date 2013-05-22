<?php
class BaseDAO{
    		
        protected $user = "student1";
        protected $password = "password";
        protected $dbname = "Sayshop";
        protected $dbh = null;
        
        
        function open(){
        
            $this->dbh = new PDO("mysql:host=localhost;dbname=".$this->dbname,$this->user,$this->password);
        }
        function close(){
            $this->dbh = null;
        }



}
?>
