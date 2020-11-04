<?php
defined("MAIN") or die("brak dostepu");

namespace View;
require_once(CLASS_PATH . 'Template.php');



abstract class View
{

    protected $templateName;
    protected $templateArray = [];
    function __construct(){
        $this->templateArray['businessName'] = BUSINESS_NAME;
        $this->templateArray['headerButtons'] = [['text' => 'przycisk', 'url' => '#']];

    }
    protected function loadFile(string $name) : string{
        $content = ""; 
        if(file_exists(HTML_PATH . $name)){
            $content = file_get_contents(HTML_PATH . $name);
        }
        return $content;
    }
    public function output(){
        if(isset($this->templateName)){
            $templatePath = TEMPLATES_PATH.$this->templateName;
            \Template::view($templatePath, $this->templateArray);
        }
    }

}


?>