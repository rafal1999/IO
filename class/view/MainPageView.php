<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageView extends View
{
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainSite.html';
        $this->setProperty('title', BUSINESS_NAME);
        $this->setProperty('motto', 'Najlepsze produkty najbliżej Ciebie');
        $this->setProperty('singleColumnClass', 'main-page-column');
        //$this->templateArray['title'] = BUSINESS_NAME;
        //$this->templateArray['motto'] = 'Najlepsze produkty najbliżej Ciebie';

        //$this->templateArray['singleColumnClass'] = 'main-page-column';
        //$this->templateArray['shops'] = [];
    }
    public function addShop(array $shop){
        $this->addArrayProperty('shops', $shop);
    }
    
}