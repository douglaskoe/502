<?php

$parser = xml_parser_create();
xml_set_element_handler($parser, 'elInicio', 'elFinaliza');
xml_set_character_data_handler($parser, 'elTexto');


$xml = new SplFileObject('clientes.xml');

foreach($xml as $line){
    xml_parse($parser, $line);
}

xml_parser_free($parser);

function elInicio($parser, $nome, $atributos)   {
    echo 'Inicio Tag: ', $nome, ' atributos: ', print_r($atributos, true);
    echo "<br>";
}

function elFinaliza($parser, $nome){
    echo 'Fim Tag: ', $nome;
    echo '<br>';
}

function elTexto($parser, $texto){
    if(trim($texto)){
        echo 'Texto: ', $texto;
        echo '<br>';
    }
}

