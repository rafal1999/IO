<?php
require_once(VIEW_PATH.'MainPageAfterCheckoutView.php');

$view = new View\MainPageAfterCheckoutView();

$view->addProduct(['_picture'=>'pralka.jpg', '_name'=>'Pralka PRALEX', '_count'=>'2', '_totalPrice'=>'2888,44']);
$view->addProduct(['_picture'=>'pralka.jpg', '_name'=>'Pralka WASHEX', '_count'=>'1', '_totalPrice'=>'1345,99']);
$view->setTotalPrice('10500');
$view->setOrder(['_address' => 'Jan Kowalski, ulica Szpaków 13, 23-453 Zbrosławice', '_delivered' => false]);
$view->output();