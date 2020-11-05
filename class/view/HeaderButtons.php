<?php
defined("MAIN") or die("brak dostepu");

namespace View;

class HeaderButtons{
    private $buttons = [
        'cart' => ['tag'=>'a', 'text'=>'Pokaż koszyk', 'url'=>'?controller=CartController', 'visible'=>false],
        'changeShop' => ['tag'=>'a', 'text'=>'Zmień sklep', 'url'=>'?controller=MainPageController&amp;_idShop=-1', 'visible'=>false],
        'register' => ['tag'=>'a', 'text'=>'Załóż konto', 'url'=>'?controller=RegisterController', 'visible'=>false],
        'manageAccount' => ['tag'=>'a', 'text'=>'Ustawienia konta', 'url'=>'?controller=registerController&and;action=manage', 'visible'=>false],
        'login' => ['tag'=>'a', 'text'=>'Zaloguj się', 'url'=>'?controller=LoginController', 'visible'=>false],
        'logout' => ['tag'=>'a', 'text'=>'Wyloguj się', 'url'=>'?controller=LoginController&and;action=logout', 'visible'=>false],
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