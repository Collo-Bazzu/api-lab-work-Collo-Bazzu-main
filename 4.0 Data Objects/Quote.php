<?php

//call autoloader
require_once "classLoader.php";

class Quote extends Database implements Crud{

    public function __construct(){
        parent::__construct();
    }

    public function insert(){
        //implement here
        $sql = 
        "INSERT INTO quote(quote,author,dob,dod,category)
        VALUES('example quote','author 1','1930','2020','C')";

        $this->connection->query($sql);

    

    }

    public function get($id = 0){
        //implement here

    }
    public function delete($id){
        //implement here

    }
}
//testing
$ql = new Quote();// object of type Quote
$ql->insert();//calling the insert() method