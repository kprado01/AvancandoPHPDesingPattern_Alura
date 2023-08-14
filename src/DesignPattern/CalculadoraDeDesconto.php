<?php

namespace Alura\DesignPattern;

use Alura\Model\Desconto\DescontoMaisDe500Reais;
use Alura\Model\Desconto\DescontoMaisde5Itens;

class CalculadoraDeDesconto
{
    public function calcula(Orcamento $orcamento) : int
    {
        $desconto = new DescontoMaisde5Itens(
            new DescontoMaisDe500Reais()
        );
        return $desconto->calculaDesconto($orcamento);
    }
}