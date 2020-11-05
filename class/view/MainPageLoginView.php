<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageLoginView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageLoginView.html';
        $this->setProperty('singleColumnClass', 'login-column');
        $this->setProperty('incorrect', false);
        $this->headerButtons->hideButton('login');
        $this->headerButtons->showButton('changeShop');
    }

    function setIncorrect(){
        $this->setProperty('incorrect', true);
    }
}
?>