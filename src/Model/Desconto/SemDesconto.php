<?php

namespace Alura\Model\Desconto;

use Alura\DesignPattern\Orcamento;

class SemDesconto extends  Desconto
{

    public function __contruct()
    {
        parent::__contruct(null);
    }

    public function calculaDesconto(Orcamento $orcamento): float
    {
       return  0;
    }
}