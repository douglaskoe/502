<?php

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

foreach($objSimple as $curso){
    //$curso->addChild('teste', 'teste');
    unset($curso->teste);

}

$objSimple->saveXML('cursos.xml');

header('Content-Type: text/xml');

echo $objSimple->asXML();