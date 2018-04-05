<?php
    class Conservador implements IInvestimento
    {
        public function calcula(Conta $conta)
        {
            return $conta->getSaldo() * 0.008;
        }
    }
?>