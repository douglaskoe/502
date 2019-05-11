<?php

namespace Model\Entity;

/**
 * Entidade Produtos, ela representa a tabela produtos no banco
 * @author denis
 *
 */
class Produtos
{

    protected $id;

    protected $nome;

    protected $preco;

    protected $categoria;

    public function __set($propriedade, $valor)
    {
        $this->$propriedade = $valor;
    }

    public function __toString()
    {
        return __CLASS__;
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
     * @return the $nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     *
     * @return the $preco
     */
    public function getPreco()
    {
        return $this->preco;
    }

    /**
     *
     * @return the $categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
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
     * @param field_type $nome            
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     *
     * @param field_type $preco            
     */
    public function setPreco($preco)
    {
        $this->preco = $preco;
    }

    /**
     *
     * @param field_type $categoria            
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }
}