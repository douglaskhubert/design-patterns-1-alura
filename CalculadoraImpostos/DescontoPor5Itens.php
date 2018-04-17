<?php


class DescontoPor5Itens implements IDesconto
{
    private $proximoDesconto;
    
    public function desconta(Orcamento $orcamento)
    {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->getValor() * 0.1;
        }
        else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }
    public function setProximoDesconto($proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}
