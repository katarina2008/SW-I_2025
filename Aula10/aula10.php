<?php
    include_once 'Conta.class.php';

    $conta1 = New Conta();

    $conta1->Nome = "Katarina";
    $conta1->Cpf = "123.456.789-00";
    
    $conta1->MostrarSaldo();

    echo "<hr>";

    echo $conta1->Depositar(500);

    echo "<hr>";

    $conta1->MostrarSaldo();

    echo "<hr>";

    echo $conta1->Sacar(500);

   







?>