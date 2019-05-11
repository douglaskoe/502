<?php

function autoload($classe)
{
    $classe = str_replace('\\', DIRECTORY_SEPARATOR, $classe);
    $file   = "../App/$classe.php";
    if(file_exists($file)){
       require_once $file; 
    }
}

//Usando a spl para registar a funcao como autoload

spl_autoload_register('autoload');