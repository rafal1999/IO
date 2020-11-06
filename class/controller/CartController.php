<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class CartController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageCartView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){   

        $products = $this->getProductsFromCookies();

        $allPrice = 0;

        if(!empty($products)){
            foreach($products as $product){         
                $productData = $this->modelProduct->getOneRow("_idproduct", $product[0]);
                $productData['_count'] = $product[1];
                $productData['_totalPrice'] = $product[1] * ($productData['_price'] - $productData['_discount']);
                $allPrice += $productData['_totalPrice'];
                $this->viewMainPage->addProduct($productData);
            }
        }else{
            $this->viewMainPage->addProduct([]);
        }
        
        $this->viewMainPage->setTotalPrice($allPrice);
        $this->viewMainPage->output();
    }

    protected function getProductsFromCookies(){

        if(isset($_COOKIE['cart'])) {
            $ecoded = urldecode($_COOKIE['cart']);
            $json = json_decode($ecoded, true);
            if(isset($json[$this->_idShop])){
                return $json[$this->_idShop];
            }else{
                return [];
            }
        }else{
            return [];
        }
    }

}


?>