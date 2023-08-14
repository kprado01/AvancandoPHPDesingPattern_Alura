<?php

namespace Alura\Model\Imposto;

use Alura\DesignPattern\Orcamento;

interface Imposto
{
    public function calculaImposto(Orcamento $orcamento) : float;
}