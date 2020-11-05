<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageAfterCheckoutView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageAfterCheckoutView.html';
        $this->setProperty('singleColumnClass', 'cart-column');
    }

    //Dodaje produkt z zamówienia
    public function addProduct(array $product){
        $this->addArrayProperty('productsInCart', $product);
    }

    //Ustawia informacje o zamówieniu
    public function setOrder(array $order){
        $this->setProperty('order', $order);
        if($order['_delivered']){
            $this->setProperty('statusHeader', 'Zamówienie zostało dostarczone');
            $this->setProperty('statusDescription', 'Zapraszamy ponownie.');
        }
        else{
            $this->setProperty('statusHeader', 'Zamówienie zostało złożone');
            $this->setProperty('statusDescription', 'Zamówienie zostanie dostarczone przez naszego kierowcę na wskazany adres tak szybko jak to możliwe.');
        }
    }

    //Ustawia całkowitą cenę zamówienia
    public function setTotalPrice($totalPrice){
        $this->setProperty('totalPrice', $totalPrice);
    }
}