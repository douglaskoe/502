<?php

namespace Curso\Loja\Carrinho;

use Curso\Loja\Produto\Produto;
use ArrayObject;

class Carrinho
{
    private $total = 0.00;
    private $itens;
    private $frete;

    public function __construct()
    {
        $this->itens = new ArrayObject;
    }

    public function addItem(Produto $produto, int $quantidade)
    {
        $item = new CarrinhoItem;
        $item->setProduto($produto, $quantidade);

        $this->itens->append($item);
        $this->setTotal();
    }

    public function setTotal()
    {
        foreach($this->itens as $item){
            $this->total += $item->getTotal();
        }
    }

    public function getTotal() : float
    {
        return $this->total;
    }

    public function getItens() : ArrayObject
    {
        return $this->itens;
    }
}