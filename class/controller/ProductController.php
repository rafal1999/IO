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

        $this->setCategories();

        $row = $this->modelProduct->getOneRow("_idproduct", $_REQUEST['idProduct']);

        $row['_idProduct'] = $row['_idproduct'];

        $this->viewMainPage->setProduct($row);
        $this->viewMainPage->output();
    }

}


?>