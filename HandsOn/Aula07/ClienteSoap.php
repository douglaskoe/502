<?php

ini_set('soap.wsdl_cache_enabled', 0);

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

$cliente = new SoapClient($wsdl);

var_dump($cliente->buscar(6));
exit;

$aluno = json_decode($cliente->buscar(6));

echo '<hr><b>Buscando o ID: 6 </b><br>';

echo 'Id: ' . $aluno->id;
echo 'Nome: ' . $aluno->nome;
echo 'Email: ' . $aluno->email;

$retorno = json_decode($cliente->listar());

echo '<hr><b>Listando todos os registros</b><br>';

foreach($retorno as $aluno){
    echo 'Id: ' . $aluno->id;
    echo 'Nome: ' . $aluno->nome;
    echo 'Email: ' . $aluno->email;
    echo '<hr>';
}


