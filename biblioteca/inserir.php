<?php
require 'conexao.php';
$titulo = "eu e esse meu coração";
$genero = "romance";
$ano = 2018;
$autor = "C.C.Hunter";
$paginas = 424;

$sql = "INSERT INTO livros (titulo, genero, ano, autor, paginas) VALUES (:titulo, :genero, :ano, :autor, :paginas)";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':genero', $genero);
$stmt->bindParam(':ano', $ano);
$stmt->bindParam(':autor', $autor);
$stmt->bindParam(':paginas', $paginas);


if ($stmt->execute()) {
echo "Livro inserido com sucesso!";
} else {
echo "Erro ao inserir livro.";
}
?>
