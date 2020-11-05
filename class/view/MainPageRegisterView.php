<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageRegisterView extends View
{   
    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageRegisterView.html';
        $this->setProperty('singleColumnClass', 'account-column');
        $this->headerButtons->hideButton('register');
    }
}
?>