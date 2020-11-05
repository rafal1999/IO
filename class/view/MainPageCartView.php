<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageCartView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageCartView.html';
        $this->setProperty('singleColumnClass', 'cart-column');
        $this->setProperty('user', []);
    }
    //Dodaje produkt z koszyka
    public function addProduct(array $product){
        $this->addArrayProperty('productsInCart', $product);
    }

    public function setTotalPrice($totalPrice){
        $this->setProperty('totalPrice', $totalPrice);
    }
}