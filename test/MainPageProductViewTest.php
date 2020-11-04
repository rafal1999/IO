<?php
require_once(VIEW_PATH.'MainPageProductView.php');

$view = new View\MainPageProductView();
$view->addCategory(['_idCategory'=>13, '_categoryName'=>'Warzywa']);
$view->addCategory(['_idCategory'=>2, '_categoryName'=>'Owoce']);

$view->setProduct(['_idProduct'=>4, '_name'=>'Chleb razowy', '_price' => 4.55, '_discount'=>0.78, '_picture'=>'chleb_razowy.jpg']);
$view->setShopName('Kozia Wólka');



$view->output();