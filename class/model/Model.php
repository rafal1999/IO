<?php
defined("MAIN") or die("brak dostepu");

namespace Model;


abstract class Model
{

    protected $tableName;

    function get(){
        global $db;
        return $db->querySelect("SELECT * FROM ".$this->tableName);
    }
    
}
