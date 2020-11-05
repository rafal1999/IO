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
            
        $this->viewMainPage->addProduct([]);
        $this->viewMainPage->setTotalPrice(0);
        $this->viewMainPage->output();
    }

}


?>