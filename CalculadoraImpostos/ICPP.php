<?php

class ICPP extends TemplateDeImpostoCondicional
{
    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500) {
            return $orcamento->getValor() * 0.07;
        } else {
            return $orcamento->getValor() * 0.05;
        }
    }
    public function deveUsarMaximTaxacao(Orcamento $orcamento)
    {

    }
}
