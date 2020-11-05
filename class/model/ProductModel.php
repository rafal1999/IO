<?php

defined("MAIN") or die("brak dostepu");

namespace Model;

require_once(MODEL_CLASS_PATH);

class ProductModel extends Model
{
    public function addNewProduct()
    {
        
    }

    public function getByShopId($idShop)
    {
        
    }

    public function searchProducts($filtr)
    {
       global $db;
       return $db->querySelect("SELECT _name, _price, _discount, _picture FROM _Product WHERE _name LIKE '%$filtr'%");
    }

    public function deleteProduct($id)
    {

    }

    public function changeDefaultPrice($newValue)
    {
        
    }

    public function changeDiscount($newValue)
    {

    }

    public function getFullPrice()
    {

    }

    public function changeAmount($newValue)
    {
        
    }

    public function updateProduct($data, $id)
    {

    }
}

?>