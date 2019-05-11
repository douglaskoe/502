<?php
namespace Model\Mapper;

use Lib\Db\AbstractDataMapper;

class UsuariosMapper extends AbstractDataMapper
{

    public $entity = 'Model\Entity\Usuarios';
    
    public function autenticar($email, $senha)
    {
        $onde = "email = '$email' AND senha = '$senha'";
        return $this->find('usuarios', $onde);
    }
}