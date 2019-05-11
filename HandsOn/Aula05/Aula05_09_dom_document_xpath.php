<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);


$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$objDomXpath = new DOMXPath($objDom);

$retorno = $objDomXpath->query("/cursos/curso[@preco='950']");

foreach($retorno as $item){
    echo 'Id do Curso: ' . $item->getElementsByTagName('id')->item(0)->nodeValue.'<br>';
    echo 'Nome do Curso: ' . $item->getElementsByTagName('nome')->item(0)->nodeValue . '<br>';
    echo 'Categoria do Curso: ' . $item->getElementsByTagName('categoria')->item(0)->nodeValue . '<br>';
    echo 'Carga/Horaria: ' . $item->getElementsByTagName('carga_horaria')->item(0)->nodeValue . '<br>';  
}

echo '<hr>';

$retorno = $objDomXpath->query("/cursos/curso[id='4501']");

foreach($retorno as $item){
    echo 'Id do Curso: ' . $item->getElementsByTagName('id')->item(0)->nodeValue . "<br>";
    echo 'Nome do Curso: ' . $item->getElementsByTagName('nome')->item(0)->nodeValue . "<br>";
    echo 'Categoria do Curso: ' . $item->getElementsByTagName('categoria')->item(0)->nodeValue . "<br>";
    echo 'Carga Horaria: ' . $item->getElementsByTagName('carga_horaria')->item(0)->nodeValue . "<br>";

}
