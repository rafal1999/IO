<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageLoginView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'LoginSite.html';
        $this->templateArray['title'] = BUSINESS_NAME;
        $this->templateArray['motto'] = 'Najlepsze produkty najbliżej Ciebie';
    
        $this->templateArray['singleColumnClass'] = 'main-page-column';
    }
}
?>