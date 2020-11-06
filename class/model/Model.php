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

    function getOneRow($column, $value){

        global $db;

        $result = $db->querySelect("SELECT * FROM ".$this->tableName." WHERE $column=$value LIMIT 1");

        if(!empty($result)){
            return $result[0];
        }else{
            return null;
        }
       
    }
    
}
