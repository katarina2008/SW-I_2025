<?php
    include_once 'Lampada.class.php';

    $lamp1 = new Lampada();

    $lamp1->Fabricante = "OSRAM";
    $lamp1->Tensao = 110;
    $lamp1->Potencia = 50;
    $lamp1->Cor = "Branca";
    

    $lamp1->MostrarDados();

    echo "<hr>";


    $lamp1->Desligar();
    $lamp1->MostrarDados();








?>