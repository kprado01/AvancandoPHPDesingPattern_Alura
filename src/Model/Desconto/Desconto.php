<?php

namespace Alura\Model\Desconto;

use Alura\DesignPattern\Orcamento;

abstract  class Desconto
{
    protected Desconto $proximoDesconto;

    public function __contruct(?Desconto $desconto)
    {
        $this->proximoDesconto = $desconto;
    }

    abstract  public function calculaDesconto(Orcamento $orcamento) : float;
}