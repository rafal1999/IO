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
        $this->setCategories();

        $this->viewMainPage->addProduct([]);
            
        $this->viewMainPage->output();
    }

}


?>