<?php
    class Arrojado
    {
        private $random;
        public function calcula(Conta $conta)
        {
            $this->random = mt_rand(1,100);

            if ($this->random <= 20) return $conta->getSaldo() * 0.05;
            else if ($this->random <= 30) return $conta->getSaldo() * 0.03;
            else return $conta->getSaldo() * 0.006;
        }
    }