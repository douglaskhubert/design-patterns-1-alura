<?php

class IKCV implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        if ($orcamento->getValor() > 500 && $this->temItemMaiorQue100ReaisNo($orcamento)) {
            return $orcamento->getValor() * 0.10;
        } else {
            return $orcamento->getValor() * 0.06;
        }
    }
    public function temItemMaiorQue100ReaisNo($orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getValor() > 100) {
                return true;
            }
        }
        return false;
    }
}
