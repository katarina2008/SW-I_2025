<?php
    include_once 'class.aluno.php';

    $fulano = new Aluno('Fulano da Silva',5,7);

    echo "Nome: " . $fulano->getNome() . "<br>";

    $fulano->verificarSituacao($fulano->mediaAluno($fulano->getNota1(), $fulano->getNota2()));

    echo "<br>";

    echo "Média: " . $fulano->mediaAluno($fulano->getNota1(), $fulano->getNota2());
 











?>