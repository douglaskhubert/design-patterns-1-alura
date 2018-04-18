<?php


class Calculadora
{
    public function realizaCalculo(Orcamento $orcamento, Imposto $imposto)
    {
        return $imposto->calcula($orcamento);
    }
}
