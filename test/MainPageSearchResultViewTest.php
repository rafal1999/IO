<?php
require_once(VIEW_PATH.'MainPageSearchResultView.php');

$view = new View\MainPageSearchResultView();
$view->addCategory(['_idCategory'=>13, '_categoryName'=>'Warzywa']);
$view->addCategory(['_idCategory'=>2, '_categoryName'=>'Owoce']);

$view->addProduct(['_idProduct'=>4, '_name'=>'Chleb razowy', '_price' => 4.55, '_discount'=>0.78, '_picture'=>'chleb_razowy.jpg']);
$view->addProduct(['_idProduct'=>4, '_name'=>'pralka', '_price' => 999, '_discount'=>0, '_picture'=>'pralka.jpg']);
$view->setShopName('Kozia Wólka');


$view->output();