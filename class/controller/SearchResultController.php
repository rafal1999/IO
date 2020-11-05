<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class SearchResultController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageSearchResultView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){   

        $this->viewMainPage->specialOffersMode();
        $this->viewMainPage->addCategory(["_idCategory" => 0, "_categoryName" => "Test"]);
        $this->viewMainPage->addCategory(["_idCategory" => 1, "_categoryName" => "Test2"]);

        $this->viewMainPage->addProduct([]);
            
        $this->viewMainPage->output();
    }

}


?>