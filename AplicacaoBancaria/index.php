<?php

require_once "autoload.php";

$conta = new Conta("Douglas", 1000);
$definer = new DefineSolicitacao();
$contaSerialized = $definer->solicita($conta, "asdw");

echo "Teste " . $contaSerialized;
