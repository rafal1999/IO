<?php 
define("MAIN", true);

require_once("class\db.php");

$db = new Database();

$db->connect();
$array = $db->querySelect("SELECT 1");

var_dump($array);


?>