<?php 

define("MAIN", true);

require_once("config/const.php");

require_once(CLASS_PATH . "Database.php");

$db = new Util\Database();
$db->connect();

//interpreter

$controllerName = isset($_REQUEST['controller']) ? $_REQUEST['controller'] : null;

if(!empty($controllerName) && file_exists(CONTROLLER_PATH.$controllerName.".php")){

    require_once(CONTROLLER_PATH.$controllerName.".php");

    $className = "Controller\\".$controllerName;
    if(file_exists($className)){
        $controller = new $className();
    }else{
        loadDefaultController();
    }

}else{
    loadDefaultController();
}


function loadDefaultController(){

    require_once(CONTROLLER_PATH."MainPageController.php");

    $className = "Controller\\MainPageController";
    if(file_exists($className)){
        $controller = new $className();
    }
}

?>