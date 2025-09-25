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
    ?>
    <h2 class ="p">FORMULÁRIO PARA ATUALIZAÇÃO DE LIVROS:</h2>
    <div class = "container">
        <form action="atualizar.php?id_livro=<?php echo $id_livro; ?>" method="POST">

        <?php
            include_once 'conexao.php';

            $sql = "SELECT * FROM livros WHERE id_livro = $id_livro";
            $stmt = $pdo->query($sql);
            $livros = $stmt->fetch(PDO::FETCH_ASSOC);
           
        ?>



            <div class="mb-3">
               TÌTULO: <input  type="text" value="<?php echo $livros['titulo'];?>" name="novo_titulo" class="form-control">
            </div>
            <div class="mb-3">
               GÊNERO:<input type="text" value="<?php echo $livros['genero'];?>"  name="novo_genero" class="form-control">
            </div>
            <div class="mb-3">
               AUTOR: <input  type="text" value="<?php echo $livros['autor'];?>" name="novo_autor"  class="form-control">
            </div>
            <div class="mb-3">
               ANO: <input  type="text" value="<?php echo $livros['ano'];?>" name="novo_ano"  class="form-control">
            </div>
            <div class="mb-3">
               PÀGINAS: <input  type="text"  value="<?php echo $livros['paginas'];?>" name="novo_paginas" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">ATUALIZAR</button>
        </form>
        <a href="index.php" type="button" class="btn btn-primary">Voltar</a>
    </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>