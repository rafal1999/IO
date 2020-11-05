<?php
require_once(VIEW_PATH.'MainPageView.php');

$view = new View\MainPageView();
$view->addShop(['_name' => 'Kozia Wólka', '_idShop' => '1']);
$view->addShop(['_name' => 'Szałsza', '_idShop' => '2']);

$view->output();