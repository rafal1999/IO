<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class SearchResultController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageSearchResultView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){   

        $this->setCategories();

        $products = [];

        if(isset($_REQUEST['search'])){
            $search = $_REQUEST['search'];
            $products = $this->modelProduct->searchProducts($_REQUEST['search'], $this->_idproductstorage);
        }else{
            if(!isset($_REQUEST['category'])){
                //default page
                $this->viewMainPage->specialOffersMode();
                $products = $this->modelProduct->getDiscountedProducts($this->_idproductstorage);
            }else{
                $products = $this->modelProduct->searchProducts("", $this->_idproductstorage, $_REQUEST['category']);   
            }
        }

        if($products != null){
            foreach($products as $product){
                $product['_idProduct'] = $product['_idproduct']; 
                $product['_discount'] = isset($product['_discountedPrice']) ? $product['_discountedPrice'] : 0; 
                $this->viewMainPage->addProduct($product);
            }
        }else{
            $this->viewMainPage->addProduct([]);
        }
            
        $this->viewMainPage->output();
    }

}


?>