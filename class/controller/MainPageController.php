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

        $this->_idShop = isset($_REQUEST['_idShop']) ? intval($_REQUEST['_idShop']) :(!empty($_SESSION['_idShop']) ? $_SESSION['_idShop'] : null);

        if($this->_idShop !== null && $this->_idShop >= 0){
            $_SESSION['_idShop'] = $this->_idShop;
        }else{
            $_SESSION['_idShop'] = null;
            $this->_idShop = null;
        }
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