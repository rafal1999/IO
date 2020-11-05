<?php
defined("MAIN") or die("brak dostepu");

namespace Controller;

abstract class Controller
{

    function __construct(){

    }

    protected function loadModel(string $name){
        $object = null;
        $className = "Model\\".$name;
        $filePath = MODEL_PATH . $name . ".php" ;
        if(!class_exists($className)){
            if(file_exists($filePath)){
                require_once($filePath);
                if(class_exists($className)){
                    $object = new $className ();
                }else{
                    throw new \Exception('None class '.$className.' in file '.$filePath);
                }
            }else{
                throw new \Exception('None file '.$filePath.' of class '.$className);
            }
        }else{
            $object = new $className();
        }
        return $object;
    }

    protected function loadView(string $name){
        $object = null;
        $className = "View\\".$name;
        $filePath = VIEW_PATH . $name . ".php" ;
        if(!class_exists($className)){
            if(file_exists($filePath)){
                require_once($filePath);
                if(class_exists($className)){
                    $object = new $className();
                }else{
                    throw new \Exception('None class '.$className.' in file '.$filePath);
                }
            }else{
                throw new \Exception('None file '.$filePath.' of class '.$className);
            }
        }else{
            $object = new $className();
        }
        return $object;
    }

    protected function changeController($controller, array $data){
        
        $datas = "";

        foreach($data as $key => $row){
            $datas .= "&" . $key . "=". htmlentities($row, ENT_QUOTES, 'UTF-8');
        }

        header('index.php?controller='.$controller.$datas);
        exit();
    } 

    abstract public function execute();

}


?>