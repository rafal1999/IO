<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageSearchResultView extends View
{
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageSearchResultView.html';
        $this->setProperty('resultsHeader', 'Wyniki wyszukiwania');
        $this->headerButtons->showButton('cart');
        $this->headerButtons->showButton('changeShop');
    }

    //Używać tej metody w przypadku wyświetlania ofert na stronie głównej
    public function specialOffersMode(){
        $this->setProperty('resultsHeader', 'Oferty');
    }

    //Opis wyników, np. $description='Szukane hasło: "kurczak"'
    public function setResultsDescription(string $description){
        $this->setProperty('resultsDescription', $description);
    }

    //Dodaje jedną kategorię do menu z lewej strony
    public function addCategory(array $category){
        $this->addArrayProperty('categories', $category);
    }

    //Dodaje jeden produkt do listy produktów
    public function addProduct(array $product){
        $this->addArrayProperty('products', $product);
    }

    
}