<?php
    include_once 'Pessoa.class.php';

    //CRIAR UM OBJETO - INSTÂNCIA DA CLASSE PESSOA
    $fulano = new Pessoa();
    $ciclano = new Pessoa();


    //var_dump($fulano);

    //ATRIBUIR VALORES
    $fulano->Nome = "FULANO DA SILVA";
    $fulano->Peso = 90;
    $fulano->Altura = 1.82;

    $ciclano->Nome = "CICLANO DA SILVA";
    $ciclano->Peso = 70;
    $ciclano->Altura = 1.50;


    //CHAMANDO UM MÉTODO DA CLASSE PESSOA
    $fulano->MostrarDados();
    $ciclano->MostrarDados();
    $fulano->Apresentar();


?>