<?php
#absolute path
//require_once '/Classes/Database.php';
#require_once 'Design/Main.php';

//echo __DIR__;

spl_autoload_register('loader');

//spl_autoload_register('loader2');


#load my design classes
function loader($className){
    require_once 'Design/'.$className.'.php';
}

function loader2($className){
    require_once 'Classes/'.$className.'.php';
    //Classes/Database.php
}
#$db = new Database();
$testObject = new Main();