<?php
namespace Model\Entity;

class Usuarios
{
    // http://p2-dev.pdt-extensions.org/
    protected $id;

    protected $email;

    protected $nome;

    protected $senha;

    /**
     *
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @param field_type $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @return the $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     *
     * @return the $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     *
     * @return the $senha
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     *
     * @param field_type $id            
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     *
     * @param field_type $email            
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     *
     * @param field_type $senha            
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
}