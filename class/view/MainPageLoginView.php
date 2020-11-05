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
        $this->headerButtons->hideButton('login');
    }
}
?>