<?php
define("MAIN", true);

require_once("config/const.php");
if(isset($_GET['name'])){
    require_once(CLASS_PATH . 'Template.php');
    //Template::clearCache();
    require_once("test/{$_GET['name']}");
}
else{
    $tests = array_diff(scandir('test'), array('..', '.'));
    foreach($tests as $name){
        echo <<<EOT
        <a href="?name=$name">$name</a><br>
EOT;
    }
}
