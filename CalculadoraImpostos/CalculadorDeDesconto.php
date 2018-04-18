<?php


class CalculadorDeDesconto
{
    public function calcula(Orcamento $orcamento)
    {
        $d1 = new DescontoPor5Itens;
        $d2 = new Desconto500Reais;
        $d3 = new DescontoPorVendaCasada;
        $d4 = new SemDesconto;
        
        $d1->setProximoDesconto($d2);
        $d2->setProximoDesconto($d3);
        $d3->setProximoDesconto($d4);
        
        return $d1->desconta($orcamento);
    }
}
