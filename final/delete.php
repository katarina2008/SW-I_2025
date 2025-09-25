<?php
require 'conexao.php';

$id_livro = $_GET['id_livro'];

$sql = "DELETE FROM livros WHERE id_livro = :id_livro";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id_livro', $id_livro);
if ($stmt->execute()) {
    echo "Livro excluído com sucesso!";
    echo "
    <div> 
        <a href='index.php' type='button' class='btn btn-primary'>Voltar</a> 
    </div>";
} else {
    echo "Erro ao excluir livro.";
}


?>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>

