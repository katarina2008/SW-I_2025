<?php
    include_once 'Carro.class.php';

    $carro1 = new Carro();

    $carro1->Marca = "Chevrolet";
    $carro1->Modelo = "opala";
    $carro1->Combustivel = "gasolina";
    $carro1->Portas = 2;
    $carro1->Capacidade_tanque = 60;

    $carro2 = new Carro();

    $carro2->Marca = "Fiat";
    $carro2->Modelo = "uno";
    $carro2->Combustivel = "gasolina";
    $carro2->Portas = 2;
    $carro2->Capacidade_tanque = 25;

    $carro3 = new Carro();

    $carro3->Marca = " Volkswagen";
    $carro3->Modelo = "T-Cross";
    $carro3->Combustivel = "gasolina";
    $carro3->Portas = 4;
    $carro3->Capacidade_tanque = 55;

    $carro4 = new Carro();

    $carro4->Marca = "Ford";
    $carro4->Modelo = "Focus";
    $carro4->Combustivel = "gasolina/Alcool";
    $carro4->Portas = 4;
    $carro4->Capacidade_tanque = 55;

    $carro5 = new Carro();

    $carro5->Marca = "Ford";
    $carro5->Modelo = "ka";
    $carro5->Combustivel = "gasolina";
    $carro5->Portas = 2;
    $carro5->Capacidade_tanque = 40;

    
    $carro1->MostrarDados();
    $carro2->MostrarDados();
    $carro3->MostrarDados();
    $carro4->MostrarDados();
    $carro5->MostrarDados();






?>