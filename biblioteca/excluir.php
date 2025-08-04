<?php
require 'conexao.php';
$id = 6;
$sql = "DELETE FROM livros WHERE id_livro = :id";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id);
if ($stmt->execute()) {
echo "Livro excluído com sucesso!";
} else {
echo "Erro ao excluir livro.";
}
?>
