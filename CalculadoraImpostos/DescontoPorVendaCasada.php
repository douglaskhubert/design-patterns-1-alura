<?php

class DescontoPorVendaCasada implements IDesconto
{
    private $proximoDesconto;

    public function desconta(Orcamento $orcamento)
    {
        if ($orcamento->existe("CANETA", $orcamento) && $orcamento->existe("LAPIS", $orcamento)) {
            return $orcamento->getValor() * 0.05;
        }
        return $this->proximoDesconto->desconta($orcamento);
    }

    public function setProximoDesconto($proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}
