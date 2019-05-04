<?php

require 'Alunos.php';

$alunos = new Alunos();

$dados = json_decode(file_get_contents('php://input'), true);

$verbo = $_SERVER['REQUEST_METHOD'];

switch($verbo){
    case 'GET':


        $id = $_GET['id'] ?? null;



        if($id){
            $resposta = $alunos->buscar($id);
        } else {
            $resposta = $alunos->listar();
        
        }


        if(!$resposta){
            header('HTTP/1.1 204');
            header('Content-Type: application/json');
            echo json_encode([
                'resposta' => 'Dados não encontrados!'
            ]);
            exit;
        }

        //Enviando Status Code
        header('HTTP/1.1 200');
        //Enviando Tipo de Conteudo
        header('Content-type: application/json');
        echo json_encode($resposta);
        break;
    case 'POST':


        if(!dados){
            header('HTTP/1.1 400');
            header('Content-type: application/json');
            echo json_encode([
                'resposta' => 'Dados não enviados!'
            ]);
            exit;
        }   


        if($alunos->inserir($dados)){
            header('HTTP/1.1 200');
            header('Content-type: application/json');
            echo json_encode([
                'resposta' => 'Dados Salvos!'
            ]);
        } 

        break;    

    case 'PUT':
        if(!$dados){
            header('HTTP/1.1 400');
            header('Content-Type: application/json');
            echo json_encode([
                'resposta' => 'Dados não enviados'
            ]);
            exit;
        }    

        if($alunos->alterar($dados)){
            header('HTTP/1.1 200');
            header('Content-Type: application/json');
            echo json_encode([
                'resposta' => 'Dados Alterados'
            ]);

        }

        break;    
    case 'DELETE':

        $id = $_GET['id'] ?? null;

        if(!$id){
            header('HTTP/1.1 400');
            header('Content-Type: application/json');
            echo json_encode([
                'resposta' => 'Dados não enviados!'
            ]);
            exit;
        }
        
        if($alunos->excluir($id)){
            header('HTTP/1.1 200');
            header('Content-Type: application/json');
            echo json_encode([
                'resposta' => 'Dados Excluidos'
            ]);

        }

        break;    

}