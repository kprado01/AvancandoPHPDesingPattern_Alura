<?php

namespace Alura\DesignPattern;

use Alura\Model\Imposto\Imposto;

class CalculadoraDeImpostos
{
    public function calcula(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calculaImposto($orcamento);
    }
}