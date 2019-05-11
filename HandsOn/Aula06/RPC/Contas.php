<?php 

class Contas
{
    protected $saldo = 0;

    public function depositar($valor)
    {
        $this->saldo += $valor;
        return $this->saldo;
    }

    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return $this->saldo;
    }

}