<?php

interface Crud{
    //inserting a record
    public function insert();
    //get allor get one
    public function get($id = 0);
    //deleting a record by id
    public function delete($id);
}