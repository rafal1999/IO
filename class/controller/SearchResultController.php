<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class SearchResultController extends MainPageController
{   

    private $modelProduct;

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageSearchResultView");
            $this->modelProduct = $this->loadModel("ProductModel");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){   

        $_idproductstorage = $this->modelShop->get_idproductstorage($this->_idShop);

        $this->setCategories();

        $products = [];

        if(isset($_REQUEST['search'])){
            $search = $_REQUEST['search'];
            $products = $this->modelProduct->searchProducts($_REQUEST['search'], $_idproductstorage);
        }else{
            if(!isset($_REQUEST['category'])){
                //default page
                $this->viewMainPage->specialOffersMode();
            }else{
                $products = $this->modelProduct->searchProducts("", $_idproductstorage, $_REQUEST['category']);   
            }
        }
        
        //var_dump($products);

        if($products != null){
            foreach($products as $product){
                $this->viewMainPage->addProduct($product);
            }
        }else{
            $this->viewMainPage->addProduct([]);
        }
            
        $this->viewMainPage->output();
    }

}


?>