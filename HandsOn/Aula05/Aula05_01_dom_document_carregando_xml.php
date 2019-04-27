<?php

//Carregando o XML usando uma variavel

$xml = file_get_contents('cursos.xml');

$objDom = new DOMDocument();
$objDom->loadXML($xml);

echo '<pre>';

print_r($objDom);

echo '<hr>';

//Carregando o XML usando um Arquivo

$objDom->load($objDom);

print_r($objDom);

echo '</pre>';