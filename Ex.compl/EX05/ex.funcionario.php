<?php

    include_once 'class.funcionario.php';


    $func1 = new Funcionario("Katarina",2160);

    $func1 -> setaumentarsalario(10);

    $func1 -> getexibirinformacoes();

?>