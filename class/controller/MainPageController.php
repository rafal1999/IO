<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class MainPageController extends Controller
{   

    private $modelProducts;
    private $viewModel;

    function __construct(array $data){

        $this->modelProducts = $this->loadModel("ProductModel");

        //get shops

        showMenu();
        showPage();

    }

    function showMenu(){

    } 

    function showPage(){

    }

}


?>