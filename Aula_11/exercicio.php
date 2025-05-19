<?php
    include_once 'Produto.class.php';

    $Produto = new Produto("Mouse", 150.00, 10);
    $Produto->adicionarEstoque(5);
    $Produto->removerEstoque(3);
    $Produto->mostrarDetalhes();



?>