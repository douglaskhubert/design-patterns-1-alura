<?php

abstract class TemplateDeImpostoCondicional implements Imposto
{
    public function calcula(Orcamento $orcamento)
    {
        if ($this->deveUsarMaximaTaxacao($orcamento)) {
            return $this->maximaTaxacao($orcamento);
        } else {
            return $this->minimaTaxacao($orcamento);
        }
    }

    abstract public function deveUsarMaximaTaxacao(Orcamento $orcamento);
    abstract public function maximaTaxacao(Orcamento $orcamento);
    abstract public function minimaTaxacao(Orcamento $orcamento);
}