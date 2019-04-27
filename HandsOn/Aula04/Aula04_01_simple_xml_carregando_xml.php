<?php

// Carregando um XML de um arquivo

$objSimple = new SimpleXMLElement('curso.xml', null, true);


echo '<pre>';

print_r($objSimple);

echo '<hr>';

$retornoXML = file_get_contents('curso.xml');

foreach($objSimple as $curso){
    echo 'Id do Curso: '.$curso->id;
    echo '<br>Nome do Curso: '.$curso->nome;
    echo '<br>Categoria do Curso: '.$curso->categoria;
    echo '<hr>';
}

echo '</pre>';