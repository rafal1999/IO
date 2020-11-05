<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class MainPageController extends Controller
{   

    protected $modelProducts;

    protected $viewMainPage;
    protected $viewHeader;

    function __construct(){

        try{
           // $this->modelProducts = $this->loadModel("ProductModel");
            $this->viewMainPage = $this->loadView("MainPageView");
            $this->viewHeader = $this->loadView("HeaderButtons");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
        
    }

    protected function showMenu(){
        
    }

    //pokazuje główną stronę
    protected function showPage(){

        if(empty($_REQUEST['_idShop'])){
            $this->viewMainPage->addShop(['_name'=>'Sklep1', '_idShop'=>'0']);
            $this->viewMainPage->output();
        }else{
            $this->viewMainPage->output();
        }
  
    }

    public function execute(){
        $this->showMenu();
        $this->showPage();
    } 

}


?>