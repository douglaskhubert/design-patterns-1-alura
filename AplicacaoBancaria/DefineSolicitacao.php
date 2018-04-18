<?php

class DefineSolicitacao
{
    public function solicita(Conta $conta, $solicitacao)
    {
        $xml = new XML;
        $csv = new CSV;
        $porcento = new Porcento;
        $semFormato = new SemFormato;

        $xml->setProximoFormato($csv);
        $csv->setProximoFormato($porcento);
        $porcento->setProximoFormato($semFormato);

        return $xml->serializar($conta, $solicitacao);
    }
}
