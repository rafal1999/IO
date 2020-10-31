<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

require_once(CONTROLLER_CLASS_PATH);

class SampleController extends Controller
{   

    function __construct(array $data){

        $model = $this->loadModel("SampleModel");
        $view = $this->loadView("SampleView");
       
        if($model == null){
            echo "nie ma modelu";
            return;
        }

        if($view == null){
            echo "nie ma widoku";
            return;
        }

        $dataFromDatabase = $model->getData();

        $inputData = !empty($data) && isset($data['first']) ? $data['first'] : 2;
        $alert = "is not gut";

        if(!empty($dataFromDatabase) && is_array($dataFromDatabase) && $dataFromDatabase['first'] == $inputData){
            $alert = "is gut!";
        }

        $view->showSomething($alert);

    }

}


?>