<?php 

define("MAIN", true);

require_once("config/const.php");

require_once(CLASS_PATH . "Database.php");

$db = new Util\Database();
$db->connect();

session_start();

//interpreter

$controllerName = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : null;

if(!empty($controllerName) && file_exists(CONTROLLER_PATH.$controllerName.".php")){

    require_once(CONTROLLER_PATH.$controllerName.".php");

    $className = "Controller\\".$controllerName;
    if(class_exists($className)){
        $controller = new $className();
        $controller->execute();
    }else{
        loadDefaultController();
    }

}else{
    loadDefaultController();
}


function loadDefaultController(){

    require_once(CONTROLLER_PATH."MainPageController.php");

    $className = "Controller\\MainPageController";
    if(class_exists($className)){
        $controller = new $className();
        $controller->execute();
    }else{
        echo "Error: class doesn't exist ".$className;
    }
}

?>