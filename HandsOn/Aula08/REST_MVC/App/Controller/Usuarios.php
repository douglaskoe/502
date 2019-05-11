<?php
namespace Controller;

use Lib\View\ViewModel;
use Model\UsuariosModel;

class Usuarios
{

    private $model;

    public function __construct()
    {
        $this->model = new UsuariosModel();
    }
    
    // public function logar()
    // {
    // if ($_POST) {
    // $email = $_POST['email'];
    // $senha = $_POST['senha'];
    // $retorno = $this->model->autenticacao($email, $senha);
    // if($retorno){
    // header('location:index.php?controller=produtos&action=listar');
    // }else{
    // $mensagem = "<h1>Usuario ou senha Incorretos</h1>";
    // }
    // }
    
    // new ViewModel('usuarios', 'logar', null, $mensagem);
    // }
    public function logar()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $data = file_get_contents('php://input');
        $data = json_decode($data, true);
        
        if (! $data || json_last_error()) {
            header('HTTP/1.1 400');
            header('content-type:application/json');
            echo json_encode(array(
                'messages' => 'Dados Invalidos'
            ));
        }
        
        if ($method != 'POST') {
            header('HTTP/1.1 405');
            header('content-type:application/json');
            echo json_encode(array(
                'messages' => 'Metodo inválido'
            ));
        }
        
        $token = $this->model->autenticacao($data);
        
        if ($token) {
            header('HTTP/1.1 200');
            header('content-type:application/json');
            echo json_encode(array(
                'token' => $token
            ));
        } else {
            header('HTTP/1.1 401');
            header('content-type:application/json');
            echo json_encode(array(
                'messages' => 'Usuário ou senha incorretos'
            ));
        }
    }
    
    public function teste()
    {
        $headers = getAllHeaders();
        
        print_r($headers);
        echo "\n\n";
        
        $authoriazation  = $headers['Authorization'];
        $authoriazation  = explode(' ', $authoriazation);
        $token = $authoriazation[1];
        echo $token;
        exit();
        
    }

    public function sair()
    {}
}














