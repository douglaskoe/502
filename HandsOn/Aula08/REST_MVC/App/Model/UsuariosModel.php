<?php
namespace Model;

use Model\Mapper\UsuariosMapper;

class UsuariosModel
{

    private $usuariosMapper;

    public function getUsuariosMapper()
    {
        if (! $this->usuariosMapper) {
            $this->usuariosMapper = new UsuariosMapper();
        }
        
        return $this->usuariosMapper;
    }

    public function autenticacao(array $data)
    {
        $email = $data['email'];
        $senha = $data['senha'];
        
        $retorno = $this->getUsuariosMapper()->autenticar($email, $senha);
        
        if ($retorno) {
            $token = $this->generateToken();
            
            $data = array(
                'token' => $token
            );
            
            $onde = "email='$email'";
            
            if ($this->usuariosMapper->update($data, 'usuarios', $onde)) {
                return $token;
            }
        }
    }

    private function generateToken()
    {
        return uniqid(md5(rand(0, 20)));
    }

    public function sair()
    {
        session_start();
        session_destroy();
        return true;
    }
}



