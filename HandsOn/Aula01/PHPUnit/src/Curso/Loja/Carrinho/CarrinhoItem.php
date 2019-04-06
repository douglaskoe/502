<?php 

namespace Curso\Loja\Carrinho;

use Curso\Loja\Produto\Produto;

class CarrinhoItem
{
    private $produto;
    private $quantidade = 0;
    private $total = 0.0;
    
    public function setProduto(Produto $produto, int $quantidade)
    {
        $this->produto = $produto;
        $this->quantidade = $quantidade;
        $this->total = $this->produto->getPreco() * $this->quantidade;
    }

    public function getProduto() : ?Produto 
    {
        return $this->produto;
    }

    public function getQuantidade() : int 
    {
        return $this->quantidade;
    }
    
    public function getTotal() : float 
    {
        return $this->total;
    }

}