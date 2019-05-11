<?php 

/*
    Esta linha permanece somente durante os teste, desabilita o SOAP
*/

init_set('soap.wsdl_cache_enabled', 0);

require 'Alunos.php';

$objAluno = new Alunos();

$wsdl = 'http://localhost/502/HandsOn/Aula07/wsdlAlunos.wsdl';

$serverSoap = new SoapServer($wsdl);

$serverSoap->setObject($objAluno);

$serverSoap->handle();