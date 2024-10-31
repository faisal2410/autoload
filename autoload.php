<?php

function myAutoload($className){
    $path=__DIR__.'/'.$className.'.php';

    if(file_exists($path)){
        include $path;
        echo "An instance of {$className}.php is created \n";
    }else{
        echo "The class file for $className does not exists \n";
    }

}

spl_autoload_register('myAutoload');