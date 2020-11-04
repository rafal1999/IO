<?php
define("MAIN", true);

require_once("config/const.php");
require_once(VIEW_PATH.'MainPageView.php');

$view = new View\MainPageView();
$view->addShop(['name'=>'Sklep1', 'url'=>'#']);
$view->output();