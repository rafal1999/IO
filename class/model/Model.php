<?php
defined("MAIN") or die("brak dostepu");

namespace Model;

abstract class Model
{

    protected $tableName;
    
    function __construct(){
        $this->tableName = new Database();
        $this->tableName->connect();
    }
    

}
