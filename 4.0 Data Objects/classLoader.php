<?php

function loader($className){
    //user
    //require_once User.php
    require_once $className.".php";

}
spl_autoload_register('loader');