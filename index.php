<?php
    require_once "autoload.php";

    $reforma = new Orcamento(2000);
    $icms = new ICMS();
    $iss = new ISS();
    $iccc = new ICCC();
    $calculadora = new Calculadora();

    echo $calculadora->realizaCalculo($reforma, $icms);
    echo "<br />";
    echo $calculadora->realizaCalculo($reforma, $iss);
    echo "<br />";
    echo $calculadora->realizaCalculo($reforma, $iccc);

    
?>