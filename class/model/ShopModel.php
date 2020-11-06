<?php

defined("MAIN") or die("brak dostepu");

namespace Model;

require_once(MODEL_CLASS_PATH);

class ShopModel extends Model
{

    function __construct(){
        $this->tableName = "_shop";
    }

    public function addNewShow($data)
    {
        global $db;
        $db->query("INSERT INTO _shop (_idproductstorage,_idShop,_name,_idmanager,_iddriver) VALUES ($data[0], $data[1],'$data[2]', $data[3], $data[4])");
    }

    public function deleteShow($id)
    {
        
    }

    public function get_idproductstorage($_idShop){
        global $db;

        $result = $db->querySelect("SELECT _idproductstorage FROM ".$this->tableName." WHERE _idshop=$_idShop LIMIT 1");

        if(!empty($result)){
            return $result[0]['_idproductstorage'];
        }else{
            return null;
        }
       
    }

    public function getManager($id)
    {

    }

}

?>