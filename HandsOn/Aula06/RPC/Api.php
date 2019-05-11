<?php

require 'Contas.php';

$dados = file_get_contents('php://input');

$dados = json_decode($dados, true);

$contas = new Contas();



if(method_exists($contas, $dados['method'])){
    $acao = '$retorno = $contas->'. $dados['method'] . '(' . $dados['params'][0].');';

    

    eval($acao);

    $jsonRetorno = json_encode([
        'saldo' => $retorno
    ]);

    header('Content-Type: application/json');

    echo $jsonRetorno;
} else {

    $jsonRetorno = json_encode(['erro' => 'Método Invalido']);

    header('Content-Type: application/json');
    http_response_code(404);
    
    echo $jsonRetorno;
}
