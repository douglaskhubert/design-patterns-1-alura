<?php

interface IFormato
{
    public function serializar(Conta $conta, $solicitacao);
}
