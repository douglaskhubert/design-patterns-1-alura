<?php

class XML implements IFormato
{
    private $proximoFormato;

    public function serializar(Conta $conta, $solicitacao)
    {
        if ($solicitacao == "XML") {
            return "XML";
        }

        return $this->proximoFormato->serializar($conta, $solicitacao);
    }

    public function setProximoFormato(IFormato $proximoFormato)
    {
        $this->proximoFormato = $proximoFormato;
    }
}
