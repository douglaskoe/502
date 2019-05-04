<?php

ini_set('soap.wsdl_cache_enabled', 0);

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$cliente = new SoapClient($wsdl);

$params = [
    'id' => 11,
    'nome' => 'Novo aluno da Silva',
    'email' => 'novoaluno@gmail.com'
];

echo $cliente->inserir(json_encode($params));
