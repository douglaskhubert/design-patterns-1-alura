<?php

class SemDesconto implements IDesconto
{
    public function desconta(Orcamento $orcamento)
    {
        return 0;
    }
}
