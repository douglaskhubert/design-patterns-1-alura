<?php
class Orcamento
{
    private $valor;
    private $itens = [];

    public function __construct($valor)
    {
        $this->valor = $valor;
    }

    public function getValor()
    {
        return $this->valor;
    }
    public function getItens()
    {
        return $this->itens;
    }
    public function addItem(Item $item)
    {
        $this->itens[] = $item;
    }

    public function existe($nomeDoItem, Orcamento $orcamento)
    {
        foreach ($orcamento->getItens() as $item) {
            if ($item->getNome() == $nomeDoItem) {
                return true;
            }
            return false;
        }
    }
}
