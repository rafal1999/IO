<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class LoginController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageLoginView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }

    protected function showPage(){   
        //$this->viewMainPage->setIncorrect();   
        $this->viewMainPage->output();
    }

}


?>