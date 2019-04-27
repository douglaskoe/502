<?php

$objSimple = new SimpleXMLElement('cursos.xml', null, true);

$retorno = $objSimple->xpath("/cursos/curso[@preco<=1000]");

echo '<pre>';

print_r($retorno);

echo '<hr>';

$retorno = $objSimple->xpath("/cursos/curso[id=4452]");

print_r($retorno);

echo "</pre>";