<?php


$objSimple = new SimpleXMLElement('curso.xml', null, true);

$objSimple->curso[0]->categoria = 'PHP Básico 1';
$objSimple->curso[1]->categoria = 'Orientação a Objetos';
$objSimple->curso[2]->categoria = 'PHP Enterprise';

$objSimple->saveXML('cursos.xml'); //Salvar as alterações no arquivo

header('Content-type: text/xml'); //Alterar o header para text/xml (para exibir formatado)

echo $objSimple->asXML(); //Retorna o XML