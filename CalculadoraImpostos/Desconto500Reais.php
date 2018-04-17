<?php

class Desconto500Reais implements IDesconto
{
    private $proximoDesconto;

    public function desconta(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500.0) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $this->proximoDesconto->desconta($orcamento);
        }
    }

    public function setProximoDesconto($proximoDesconto)
    {
        $this->proximoDesconto = $proximoDesconto;
    }
}
