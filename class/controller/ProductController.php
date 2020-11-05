<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_PATH."MainPageController.php");

class ProductController extends MainPageController
{   

    function __construct(){
        parent::__construct();
        try{
            $this->viewMainPage = $this->loadView("MainPageProductView");
        }catch(\Exception $e){
            echo $e->getMessage() . "\n";
        }
    }


    protected function showPage(){            
        //$this->viewMainPage->addProduct([]);
        $this->setCategories();
        $this->viewMainPage->setProduct([
            '_picture' => 'cukier.jpg'
            ,'_description' => 'Opis'
            ,'_discount' => 15
            ,'_price' => 50
            ,'_idProduct' => 0
            ,'_name' => "Swoiski cukier"
        ]);
        $this->viewMainPage->output();
    }

}


?>