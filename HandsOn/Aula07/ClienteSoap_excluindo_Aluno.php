<?php

ini_set('soap.wsdl_cache_enabled', 0);

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$cliente = new SoapClient($wsdl);

echo $cliente->excluir(11);