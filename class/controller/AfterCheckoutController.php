<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class AfterCheckoutController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageAfterCheckoutView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){            
        $this->viewMainPage->addProduct([]);
        $this->viewMainPage->setOrder([
            '_delivered' => false
        ]);
        $this->viewMainPage->setTotalPrice(0);
        $this->viewMainPage->output();
    }

}


?>