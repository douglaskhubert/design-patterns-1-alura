<?php

class Item
{
    private $nome;
    private $valor;

    public function __construc($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function getValor()
    {
        return $this->valor;
    }
}
