<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class CheckoutController extends MainPageController
{   

    private $defaultUser = [
        '_firstName' => ""
        ,'_lastName' => ""
        ,'_street' => ""
        ,'_houseNumber' => ""
        ,'_flatNumber' => ""
        ,'_postalCode' => ""
        ,'_city' => ""
        ,'_email' => ""
        ,'_phoneNumber' => ""
    ];

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageCheckoutView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){            
        //$this->viewMainPage->addProduct([]);
        $this->viewMainPage->setUser($this->defaultUser);
        $this->viewMainPage->output();
    }

}


?>