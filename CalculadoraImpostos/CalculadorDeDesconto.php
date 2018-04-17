<?php


class CalculadorDeDescontos
{
    public function calcula(Orcamento $orcamento)
    {
        $d1 = new DescontoPor5Itens;
        $d2 = new Desconto500Reais;
        $d3 = new SemDesconto;
        
        $d1->setProximoDesconto($d2);
        $d2->setProximoDesconto($d3);
        
        return $d1->desconta($orcamento);
    }
}
