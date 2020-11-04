<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageRegisterView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageRegisterView.html';
        $this->templateArray['title'] = BUSINESS_NAME;
        $this->templateArray['motto'] = 'Najlepsze produkty najbliżej Ciebie';
    
        $this->templateArray['singleColumnClass'] = 'main-page-column';
    }
}
?>