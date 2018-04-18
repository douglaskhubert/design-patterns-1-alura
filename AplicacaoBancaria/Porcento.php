<?php

class Porcento implements IFormato
{
    private $proximoFormato;

    public function serializar(Conta $conta, $solicitacao)
    {
        if ($solicitacao == "PORCENTO") {
            return "Porcento";
        }
        return $this->proximoFormato->serializar($conta, $solicitacao);
    }

    public function setProximoFormato(IFormato $proximoFormato)
    {
        $this->proximoFormato = $proximoFormato;
    }
    
}