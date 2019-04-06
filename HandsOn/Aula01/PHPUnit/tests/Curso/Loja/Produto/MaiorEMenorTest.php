<?php

namespace Curso\Loja\Produto;

require './vendor/autoload.php';

use Curso\Loja\Carrinho\Carrinho;
use Curso\Loja\Produto\{Produto, MaiorEMenor};
use PHPUnit\Framework\TestCase;

class MaiorEMenorTest extends TestCase
{
    public function testOrdemAleatoria()
    {
        $carrinho = new Carrinho;
        $carrinho->addItem(new Produto('Sound Bar', 650), 1);
        $carrinho->addItem(new Produto('TV', 2500), 1);
        $carrinho->addItem(new Produto('Suporte TV', 125), 1);

        $maiorMenor = new MaiorEMenor;
        $maiorMenor->encontra($carrinho);
 
        $this->assertEquals('Suporte TV', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('TV', $maiorMenor->getMaior()->getNome());

    }

    public function testeOrdemDecrescente()
    {
        $carrinho = new Carrinho;
        
        $carrinho->addItem(new Produto("TV", 2500), 1);
        $carrinho->addItem(new Produto("Sound Bar", 650), 1);
        $carrinho->addItem(new Produto("Suporte TV", 125), 1);

        $maiorMenor = new MaiorEMenor;
        $maiorMenor->encontra($carrinho);

        $this->assertEquals('Suporte TV', $maiorMenor->getMenor()->getNome());
        $this->assertEquals('TV', $maiorMenor->getMaior()->getNome());

    }



}