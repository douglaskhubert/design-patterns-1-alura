<?php

class ImpostoY extends TemplateDeImpostoCondicional
{
    public function deveUsarMaximaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($orcamento);
    }
    public function maximaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.10;
    }
    public function minimaTaxacao(Orcamento $orcamento)
    {
        return $orcamento->getValor() * 0.06;
    }
    private function temItemMaiorQue100ReaisNo(Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            }
        }
        return false;
    }
}
