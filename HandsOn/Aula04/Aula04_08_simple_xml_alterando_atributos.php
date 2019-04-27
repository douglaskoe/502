<?php


$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$objSimple->curso[0]->attributes()->preco = 950;

$objSimple->saveXML('cursos.xml');

header('Content-type: text/xml');

echo $objSimple->asXML();