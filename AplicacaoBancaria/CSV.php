<?php

class CSV implements IFormato
{
    private $proximoFormato;

    public function serializar(Conta $conta, $solicitacao)
    {
        if ($solicitacao == "CSV") {
            return "CSV";
        }

        return $this->proximoFormato->serializar($conta, $solicitacao);
    }

    public function setProximoFormato(IFormato $proximoFormato)
    {
        $this->proximoFormato = $proximoFormato;
    }
}