<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
</head>

    
<body>
    <?php
         include_once 'pedaco.php';


         $id_livro = $_GET['id_livro'];
        // echo "Valor do ID: " .$id_livro;

        include_once 'conexao.php';
    ?>
    <h2 class ="white">FORMULÁRIO PARA ATUALIZAÇÃO DE LIVROS</h2>
    <div class = "container">
        <form action="#" method="POST">

        <?php

            $sql = "SELECT * FROM livros WHERE id_livro = $id_livro";
            $stmt = $pdo->query($sql);
            while ($livros = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "titulo: " . $livros['titulo'] . "<br>";
                echo "genero: " . $livros['genero'] . "<br>";
                echo "autor: R$" . $livros['autor'] . "<br>";
                echo "ano: " . $livros['ano'] . "<br>";
                echo "paginas: " . $livros['paginas'] . "<br><br>";
            }
        ?>



            <div class="mb-3">
                <input  type="text" value=
                "
                <?php
                    echo $livros['titulo'];
                ?>
                "
                 name="titulo" class="form-control">
            </div>
            <div class="mb-3">
                <input type="text" name="genero"  class="form-control">
            </div>
            <div class="mb-3">
                <input  type="text" name="autor" class="form-control">
            </div>
            <div class="mb-3">
                <input  type="text" name="ano" class="form-control">
            </div>
            <div class="mb-3">
                <input  type="text" name="paginas" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
        </form>
        <a href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>