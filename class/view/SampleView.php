<?php
defined("MAIN") or die("brak dostepu");

namespace View;

require_once(VIEW_CLASS_PATH);

class SampleView extends View
{   

    function showSomething(string $alert){
        //Tutaj nie jestem pewien czy nie używać jakiegoś prostego silnika do templeta, albo zrobić jak poniżej

        $content = $this->loadFile("sample.html");

        $content = str_replace("%jakistekst%", $alert, $content);

        echo $content;

    }

}


?>