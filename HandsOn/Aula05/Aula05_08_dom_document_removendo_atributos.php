<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$ementa = $objDom->getElementsByTagName('ementa')->item(0);

$ementa->removeAttribute('versao_erro');

$objDom->save('cursos.xml');

header('Content-Type: text/xml');

echo $objDom->saveXML();