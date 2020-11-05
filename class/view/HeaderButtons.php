<?php
defined("MAIN") or die("brak dostepu");

namespace View;

class HeaderButtons{
    private $buttons = [
        'cart' => ['tag'=>'a', 'text'=>'Pokaż koszyk', 'url'=>'CartController', 'visible'=>false],
        'changeShop' => ['tag'=>'a', 'text'=>'Zmień sklep', 'url'=>'MainPageController', 'visible'=>false],
        'register' => ['tag'=>'a', 'text'=>'Załóż konto', 'url'=>'RegisterController', 'visible'=>false],
        'manageAccount' => ['tag'=>'a', 'text'=>'Ustawienia konta', 'url'=>'registerController?action=manage', 'visible'=>false],
        'login' => ['tag'=>'a', 'text'=>'Zaloguj się', 'url'=>'LoginController', 'visible'=>false],
        'logout' => ['tag'=>'a', 'text'=>'Wyloguj się', 'url'=>'LoginController?action=logout', 'visible'=>false],
    ];

    public function showButton(string $buttonName){
        $this->buttons[$buttonName]['visible'] = true;
    }

    public function hideButton(string $buttonName){
        $this->buttons[$buttonName]['visible'] = false;
    }

    public function getVisibleButtons(){
        return array_filter($this->buttons, function($button){
            return $button['visible'];
        });
    }
}