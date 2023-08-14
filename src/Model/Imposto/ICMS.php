<?php

namespace Alura\Model\Imposto;

use Alura\DesignPattern\Orcamento;

class ICMS implements  Imposto
{
    public function calculaImposto(Orcamento $orcamento): float
    {
        return $orcamento->valor * 0.1;
    }
}