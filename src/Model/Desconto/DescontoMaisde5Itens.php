<?php

namespace Alura\Model\Desconto;

use Alura\DesignPattern\Orcamento;

class DescontoMaisde5Itens extends Desconto
{

    public function calculaDesconto(Orcamento $orcamento): float
    {
        if ($orcamento->qtdeProdutos > 5){
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}