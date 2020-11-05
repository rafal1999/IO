<?php
require_once(VIEW_PATH.'MainPageCartView.php');

$view = new View\MainPageCartView();

$view->addProduct(['_picture'=>'pralka.jpg', '_name'=>'Pralka PRALEX', '_count'=>'2', '_totalPrice'=>'2888,44']);
$view->addProduct(['_picture'=>'pralka.jpg', '_name'=>'Pralka WASHEX', '_count'=>'1', '_totalPrice'=>'1345,99']);
$view->setTotalPrice('10500');
$view->output();