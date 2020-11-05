<?php
require_once(VIEW_PATH.'MainPageCheckoutView.php');

$view = new View\MainPageCheckoutView();
$view->setUser(['_firstName'=>'Jan', '_lastName'=>'Kowalski']);

$view->output();