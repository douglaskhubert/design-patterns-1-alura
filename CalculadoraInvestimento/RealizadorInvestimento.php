<?php
    class RealizadorInvestimento
    {
        public function realizaConta(Conta $conta, IInvestimento $investimento)
        {
            $resultado = $investimento->calcula($conta);

            $conta->deposita($resultado * 0.75);
            return $conta->getSaldo();
        }
    }
?>