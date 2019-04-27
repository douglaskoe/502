<?php 

$objSimple = new SimpleXMLElement('curso.xml', null, true);


unset($objSimple->curso[0]->attributes()->preco);

$objSimple->saveXML('curso.xml');

header('Content-type: text/xml');

echo $objSimple->asXML();