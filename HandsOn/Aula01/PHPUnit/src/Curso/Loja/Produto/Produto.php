<?php

namespace Curso\Loja\Produto;

class Produto
{
    private $nome;
    private $preco;

    public function __construct(string $nome, float $preco)
    {
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome() : string
    {
        return $this->nome;
    }

    public function getPreco() : float
    {
        return $this->preco;
    }
}