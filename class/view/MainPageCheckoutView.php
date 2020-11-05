<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class MainPageCheckoutView extends View
{   

    function __construct(){
        parent::__construct();
        $this->templateName = 'MainPageCheckoutView.html';
        $this->setProperty('singleColumnClass', 'account-column');
        $this->setProperty('user', []);
    }

    //Ustawia dane użytkownika do wstępnego wypełnienia formularza
    public function setUser(array $user){
        $this->setProperty('user', $user);
    }

}
?>