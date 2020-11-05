<?php

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
       $query = "SELECT _idProduct, _name, _price, _discount, _picture FROM _Product WHERE _name == '$filtr'";
       return $this->d->querySelect($query);
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