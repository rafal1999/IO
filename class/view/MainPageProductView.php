<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageProductView extends View
{
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageProductView.html';
        $this->headerButtons->showButton('cart');
        $this->headerButtons->showButton('changeShop');
       
    }

    //Dodaje jedną kategorię do menu z lewej strony
    public function addCategory(array $category){
        $this->addArrayProperty('categories', $category);
    }

    //Ustawia produkt do wyświetlenia
    public function setProduct(array $product){
        $this->setProperty('product', $product);
    }

    
}