<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class RegisterController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageRegisterView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }

    protected function showPage(){    
        $this->viewMainPage->output();
    }

}


?>