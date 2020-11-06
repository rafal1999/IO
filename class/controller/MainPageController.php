<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class MainPageController extends Controller
{   

    protected $modelShop;
    protected $modelProduct;

    protected $viewMainPage;
    protected $viewHeader;

    protected $_idShop = null;
    protected $_idproductstorage= null;
    protected $isLogged = false;

    function __construct(){

        try{
            $this->modelShop = $this->loadModel("ShopModel");
            $this->modelProduct = $this->loadModel("ProductModel");
            $this->viewHeader = $this->loadView("HeaderButtons");
            $this->viewMainPage = $this->loadView("MainPageView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }

        $this->isLogged = isset($_SESSION['isLogged']) ? true : false;
        
    }

    protected function showMenu(){
        $this->viewMainPage->setLogged($this->isLogged);
    }

    private function checkShop(){

        if(isset($_REQUEST['_idShop'])){
            if(intval($_REQUEST['_idShop']) < 0){
                $_SESSION['_idShop'] = null;
            }else{
                $this->_idShop = $_SESSION['_idShop'] = intval($_REQUEST['_idShop']);
                $this->_idproductstorage = $this->modelShop->get_idproductstorage($this->_idShop);

            }
        }else if(isset($_SESSION['_idShop']) && intval($_SESSION['_idShop']) >= 0){
            $this->_idShop = $_SESSION['_idShop'];
            $this->_idproductstorage = $this->modelShop->get_idproductstorage($this->_idShop);

        }
        
        $this->viewMainPage->setIdShop($this->_idShop);

    }

    protected function setCategories(){

        $categories = $this->modelProduct->getCategories($this->_idproductstorage);

        if($categories){
            foreach($categories as $category){
                $category['_idCategory'] = $category['_idcategory'];
                $category['_categoryName'] = $category['_categoryname'];
                $this->viewMainPage->addCategory($category);
            }
        }else{
            $this->viewMainPage->addCategory([]);
        }

    }

    //pokazuje główną stronę
    protected function showPage(){
        
        if($this->_idShop === null){

            $shops = $this->modelShop->get();
       
            foreach($shops as $shop){
                $shop['_idShop'] = $shop['_idshop'];
                $this->viewMainPage->addShop($shop);
            }
            $this->viewMainPage->output();

        }else{  
            $this->changeController("SearchResultController", []);        
        }
    }

    public function execute(){
        $this->checkShop();
        $this->showMenu();
        $this->showPage();
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