<?php

class SemFormato implements IFormato
{
    public function serializar(Conta $conta, $solicitacao)
    {
        return false;
    }
}
