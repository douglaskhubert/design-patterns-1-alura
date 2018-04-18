<?php

class Conta
{
    private $titular;
    private $saldo;

    public function __construct($titular, $saldo)
    {
        $this->titular = $titular;
        $this->saldo = $saldo;
    }
}
