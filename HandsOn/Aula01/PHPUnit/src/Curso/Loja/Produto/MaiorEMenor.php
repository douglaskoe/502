<?php

namespace Curso\Loja\Produto;

use Curso\Loja\Carrinho\Carrinho;

class MaiorEMenor 
{
    private $maior;
    private $menor;

    public function encontra(Carrinho $carrinho)
    {
        foreach($carrinho->getItens() as $item){
            if(empty($this->menor) || $item->getProduto()->getPreco() < $this->menor->getPreco()){
                $this->menor = $item->getProduto();
            } /* else */ if (empty($this->maior) ||  $item->getProduto()->getPreco() > $this->maior->getPreco()){
                $this->maior = $item->getProduto();    
            }
        }

    }

    public function getMenor()
    {
        return $this->menor;
    }

    public function getMaior()
    {
        return $this->maior;
    }


}
