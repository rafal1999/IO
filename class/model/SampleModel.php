<?php
defined("MAIN") or die("brak dostepu");

namespace Model;

require_once(MODEL_CLASS_PATH);

class SampleModel extends Model
{   

    function getData() : array{

        return [
            'first' => 1
            ,'second' => "test"
        ];

    } 

}


?>