<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$topico4 = $objDom->getElementsByTagName('topico4')->item(0);

$parent = $topico4->parentNode;

$parent->removeChild($topico4);

$objDom->save('cursos.xml');

header('Content-Type: text/xml');

echo $objDom->saveXML();
