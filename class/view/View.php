<?php
defined("MAIN") or die("brak dostepu");

namespace View;
require_once(CLASS_PATH . 'Template.php');



abstract class View
{

    protected $templateName;
    protected $templateArray = [];
    function __construct(){
        $this->setProperty('businessName', BUSINESS_NAME);
        $this->addArrayProperty('headerButtons', ['text' => 'przycisk', 'url' => '#']);
    }

    protected function loadFile(string $name) : string{
        $content = ""; 
        if(file_exists(HTML_PATH . $name)){
            $content = file_get_contents(HTML_PATH . $name);
        }
        return $content;
    }
    
    //Dodaje wartość o nazwie $name do tablicy $templateArray
    protected function setProperty(string $name, $value){
        $this->templateArray[$name] = $value;
    }

    private function createArrayProperty(string $name){
        if(isset($this->templateArray[$name]))
            $this->templateArray[$name] = [$this->templateArray[$name]];
        else
            $this->templateArray[$name] = [];
    }

    //Dodaje wartość do tablicy o nazwie $name w $templateArray
    protected function addArrayProperty(string $name, $value){
        if(!is_array($this->templateArray[$name])){
            $this->createArrayProperty($name);
        }
        $this->templateArray[$name][] = $value;
    }

    public function output(){
        if(isset($this->templateName)){
            $templatePath = TEMPLATES_PATH.$this->templateName;
            \Template::view($templatePath, $this->templateArray);
        }
    }

}


?>