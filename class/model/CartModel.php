<?php

defined("MAIN") or die("brak dostepu");

namespace Model;

require_once(MODEL_CLASS_PATH);

class CartModel extends Model
{
    public function addToCart($idProduct, $idClient)
    {
        //INSERT INTO _productcategory (_idcategory,_categoryname ) Values (4,'Napoje');
        global $db;
        $db->query();

    }

    public function getCart()
    {
        
    }

    public function deleteProductFromCart($idProduct, $idClient)
    {

    }

    public function deleteCart($idClient)
    {
        
    }
}

?>