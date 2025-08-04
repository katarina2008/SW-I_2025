<?php
require 'conexao.php';
$id = 7;
$novoPaginas = 368;
$sql = "UPDATE livros SET paginas = :paginas WHERE id_livro = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':paginas', $novoPaginas);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "Livro atualizado com sucesso!";
} else {
echo "Erro ao atualizar livro.";
}
?>
