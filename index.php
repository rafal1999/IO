<?php 

define("MAIN", true);

require_once("config/const.php");

require_once(CLASS_PATH . "Database.php");

//todo interpreter

require_once(CONTROLLER_PATH . "SampleController.php");

$inputArray = [
    'first' => 2
];

$sample = new Controller\SampleController($inputArray);

?>