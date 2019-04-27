<?php

$objDom = new DOMDocument();
$objDom->load('cursos.xml');

$carga = $objDom->getElementsByTagName('carga_horaria');

$carga->item(0)->nodeValue = 45;

foreach($carga as $item){
    $item->nodeValue = 45;
}

//Salvando as alterações no arquivo

$objDom->save('cursos.xml');
header('Content-type: text/xml');

//Exibe (retorno) o XML
echo $objDom->saveXML();