<?php

defined("MAIN") or die("brak dostepu");

namespace Model;

require_once(MODEL_CLASS_PATH);

class ProductModel extends Model
{

    function __construct(){
        $this->tableName = "_product";
    }

    public function addNewProduct(){
        
    }

    public function getByShopId($idShop){
        
    }

    public function searchProducts($filtr, $_idproductstorage , $_idcategory = null){
        global $db;
        
        $where_idcategory = "";
        if($_idcategory !== null){
            $where_idcategory .= " AND _idcategory=".$_idcategory;
        }

        return $db->querySelect("SELECT _name, _price, _discount, _picture, _description, _picture, _idProduct  FROM _Product WHERE _name LIKE '%$filtr%' AND _idproductstorage = $_idproductstorage".$where_idcategory);

    }

    public function deleteProduct($id){

    }

    public function changeDefaultPrice($newValue){
        
    }

    public function changeDiscount($newValue){

    }

    public function getFullPrice(){

    }

    public function changeAmount($newValue){
        
    }

    public function updateProduct($data, $id){

    }

    public function getDiscountedProducts($_idproductstorage){
        global $db;
       
        if($_idproductstorage){
            return $db->querySelect("SELECT _Product._idProduct, _Product._name, _Product._price, _Product._price - _Product._discount AS \"_discountedPrice\", _description, _picture  FROM _Product
            JOIN _ProductStorage ON _ProductStorage._idProductStorage = _Product._idProductStorage WHERE _ProductStorage._idProductStorage = $_idproductstorage AND _Product._discount <> 0");
        }else{
            return null;
        }
    }

    public function getCategories($_idproductstorage)
    {
        global $db;

        if($_idproductstorage){
            return $db->querySelect("SELECT DISTINCT _ProductCategory._idCategory, _categoryName FROM _ProductCategory JOIN _Product ON _Product._idCategory = _ProductCategory._idCategory
            JOIN _ProductStorage ON _ProductStorage._idProductStorage = _Product._idProductStorage WHERE _ProductStorage._idProductStorage = $_idproductstorage");
        }else{
            return null;
        }
    }
}

?>