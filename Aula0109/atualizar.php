<?php
require 'conexao.php';
$id_livro = $_GET['id_livro'];
$novo_titulo = $_POST['novo_titulo'];
$novo_genero = $_POST['novo_genero'];
$novo_autor = $_POST['novo_autor'];
$novo_ano = $_POST['novo_ano'];
$novo_paginas = $_POST['novo_paginas'];

$sql = "UPDATE livros

SET titulo = :novo_titulo,
    genero = :novo_genero,
    autor = :novo_autor,
    ano = :novo_ano,
    paginas = :novo_paginas

WHERE id_livro = :id_livro";

$stmt = $pdo->prepare($sql);

$stmt->bindParam(':id_livro', $id_livro);
$stmt->bindParam(':novo_titulo', $novo_titulo);
$stmt->bindParam(':novo_genero', $novo_genero);
$stmt->bindParam(':novo_autor', $novo_autor);
$stmt->bindParam(':novo_ano', $novo_ano);
$stmt->bindParam(':novo_paginas', $novo_paginas);

if ($stmt->execute()) {
echo "LIVRO ATUALIZADO COM SUCESSO!";
} else {
echo "ERRO AO ATUALIZAR LIVRO.";
}
?>
