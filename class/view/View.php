<?php
defined("MAIN") or die("brak dostepu");

namespace View;

abstract class View
{

    protected function loadFile(string $name) : string{
        $content = ""; 
        if(file_exists(HTML_PATH . $name)){
            $content = file_get_contents(HTML_PATH . $name);
        }
        return $content;
    }

}


?>