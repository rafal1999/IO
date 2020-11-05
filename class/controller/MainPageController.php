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

    function __construct(){

        try{
            $this->viewHeader = $this->loadView("HeaderButtons");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }

        $this->_idShop = isset($_REQUEST['_idShop']) ? intval($_REQUEST['_idShop']) :(!empty($_SESSION['_idShop']) ? $_SESSION['_idShop'] : null);

        if($this->_idShop !== null){
            $_SESSION['_idShop'] = $this->_idShop;
        }else{
            session_unset($_SESSION['_idShop']);
        }
        
    }

    protected function showMenu(){

    }

    //pokazuje główną stronę
    protected function showPage(){

        if($this->_idShop === null){
            try{
                $this->viewMainPage = $this->loadView("MainPageView");
            }catch(\Exception $e){
                echo $e->getMessage() . "\n";
            }
            $this->viewMainPage->addShop(['_name'=>'Sklep1', '_idShop'=>'0']);
            $this->viewMainPage->output();
        }else{  
            $this->changeController("SearchResultController", []);        
        }
  
    }

    public function execute(){
        $this->showMenu();
        $this->showPage();
    } 

}


?>