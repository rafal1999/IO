<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class MainPageController extends Controller
{   

    protected $modelProducts;

    protected $viewMainPage;
    protected $viewHeader;

    protected $_idShop = null;
    protected $isLogged = false;

    function __construct(){

        try{
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
            }
        }else if(isset($_SESSION['_idShop']) && intval($_SESSION['_idShop']) >= 0){
            $this->_idShop = $_SESSION['_idShop'];
        }

    }

    protected function setCategories(){
        $this->viewMainPage->addCategory(["_idCategory" => 0, "_categoryName" => "Test"]);
        $this->viewMainPage->addCategory(["_idCategory" => 1, "_categoryName" => "Test2"]); 
    }

    //pokazuje główną stronę
    protected function showPage(){
        
        if($this->_idShop === null){
            $this->viewMainPage->addShop(['_name'=>'Sklep1', '_idShop'=>'0']);
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

}


?>