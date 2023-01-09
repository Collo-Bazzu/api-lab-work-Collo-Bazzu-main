<?php

//constants
define("DB_HOST","localhost");
define("DB_PORT","3306");
//specify yours
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","class_db");

class Database{

    public $connection;//property
    public function __construct(){//method-constructor

        $this->connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME,DB_PORT);
        //display errors if connection not successful
        if($this->connection->connect_errno){
            echo "Failed to connect : " .
            $this->connection->connect_error;
        exit();
        }
    }
    
}

//$test= new Database();//constructor is called automatically