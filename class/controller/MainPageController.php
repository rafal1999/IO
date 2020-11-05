<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class MainPageController extends Controller
{   

    private $modelProducts;

    private $viewMainPage;
    private $viewHeader;

    function __construct(){

        try{
           // $this->modelProducts = $this->loadModel("ProductModel");
            $this->viewMainPage = $this->loadView("MainPageView");
            $this->viewHeader = $this->loadView("HeaderButtons");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }

        $this->showMenu();
        $this->showPage();
    }

    function showMenu(){
        
    } 

    function showPage(){
        $this->viewMainPage->output();
    }

}


?>