<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$curso = $objDom->getElementsByTagName('curso');

$dataInicio = $objDom->createElement('data_inicio', '2018-10-12'); //Criando um novo elemento

$curso->item(0)->appendChild($dataInicio); //Adicione o novo nó ao elemento desejado

$objDom->save('cursos.xml');

header('Content-type: text/xml');

echo $objDom->saveXML();