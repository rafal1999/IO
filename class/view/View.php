<?php
defined("MAIN") or die("brak dostepu");

namespace View;
require_once(CLASS_PATH . 'Template.php');
require_once(VIEW_PATH . 'HeaderButtons.php');


abstract class View
{

    protected $templateName; // Nazwa pliku z szablonem
    protected $templateArray = [];
    protected $headerButtons;
    
    function __construct(){
        $this->headerButtons = new HeaderButtons();
        $this->setProperty('businessName', BUSINESS_NAME);
        $this->setProperty('title', BUSINESS_NAME);
        $this->setProperty('motto', BUSINESS_MOTTO);
        $this->setLogged(false);
    }

    protected function loadFile(string $name) : string{
        $content = ""; 
        if(file_exists(HTML_PATH . $name)){
            $content = file_get_contents(HTML_PATH . $name);
        }
        return $content;
    }

    //Ustawia, czy użytkownik jest zalogowany
    public function setLogged(bool $isLogged){
        if($isLogged){
            $this->headerButtons->showButton('logout');
            $this->headerButtons->showButton('manageAccount');
            $this->headerButtons->hideButton('login');
            $this->headerButtons->hideButton('register');
        }
        else{
            $this->headerButtons->showButton('login');
            $this->headerButtons->showButton('register');
            $this->headerButtons->hideButton('logout');
            $this->headerButtons->hideButton('manageAccount');
        }
    }

    //Ustawia nazwę sklepu do wyświetlenia na górze strony.
    //Jeżeli ta funkcja nie będzie wywołana, pokaże się domyślne motto sklepu
    public function setShopName(string $name){
        $this->setProperty('motto', $name);
    }

    //Wyświetla widok
    public function output(){
        if(isset($this->templateName)){
            $this->beforeOutputBase();
            $templatePath = TEMPLATES_PATH.$this->templateName;
            \Template::view($templatePath, $this->templateArray);
        }
    }
    
    //Dodaje wartość o nazwie $name do tablicy $templateArray
    protected function setProperty(string $name, $value){
        $this->templateArray[$name] = $value;
    }

    private function createArrayProperty(string $name){
        if(!isset($this->templateArray[$name]) || !is_array($this->templateArray[$name]))
            $this->templateArray[$name] = [];
    }

    //Dodaje wartość do tablicy o nazwie $name w $templateArray
    protected function addArrayProperty(string $name, $value){
        if(!isset($this->templateArray[$name]) || !is_array($this->templateArray[$name])){
            $this->createArrayProperty($name);
        }

        if(!empty($value)){
            $this->templateArray[$name][] = $value;
        }
  
    }

    //Czynności które mają się wykonać tuż przed wygenerowaniem strony
    private function beforeOutputBase(){
        $this->setProperty('headerButtons', $this->headerButtons->getVisibleButtons());
        $this->beforeOutput();
    }

    //Dodatkowe czynności, które mają się wykonać tuż przed wygenerowaniem strony
    //Do nadpisania w klasach potomnych
    protected function beforeOutput(){

    }

    

}


?>