<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$objSimple->curso[0]->addAttribute('preco', 900);
$objSimple->curso[1]->addAttribute('preco', 1000);
$objSimple->curso[2]->addAttribute('preco', 1200);
$objSimple->curso[3]->addAttribute('preco', 1000);
$objSimple->curso[4]->addAttribute('preco', 1300);

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();