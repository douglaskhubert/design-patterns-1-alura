<?php
    require_once "autoload.php";

    // $reforma = new Orcamento(2000);
    // $icms = new ICMS();
    // $iss = new ISS();
    // $iccc = new ICCC();
    // $calculadora = new Calculadora();

    // echo $calculadora->realizaCalculo($reforma, $icms);
    // echo "<br />";
    // echo $calculadora->realizaCalculo($reforma, $iss);
    // echo "<br />";
    // echo $calculadora->realizaCalculo($reforma, $iccc);


    $calculador = new CalculadorDeDesconto;
    $orcamento = new Orcamento(450.0);
    $orcamento->addItem(new Item("CANETA", 250.0));
    $orcamento->addItem(new Item("LAPIS", 200.0));

    $desconto = $calculador->calcula($orcamento);
    echo $desconto;
