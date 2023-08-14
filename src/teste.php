<?php

use Alura\DesignPattern\CalculadoraDeDesconto;
use Alura\DesignPattern\CalculadoraDeImpostos;
use Alura\DesignPattern\Orcamento;
use Alura\Model\Imposto\ICMS;
use Alura\Model\Imposto\ISS;

require __DIR__ . '/../vendor/autoload.php';

$orcamento = new Orcamento();
$orcamento->valor= 1000;
/*$calculadoraDeImposto = new CalculadoraDeImpostos();
$ICMS = new ICMS();
$ISS = new ISS();


echo $calculadoraDeImposto->calcula($orcamento,$ISS);
*/

$calculadoraDesconto = new CalculadoraDeDesconto();
$orcamento->qtdeProdutos = 3;

echo $calculadoraDesconto->calcula($orcamento);