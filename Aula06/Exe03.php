<?php 

$produtos = [
    [
        "Nome" => "Vestido",
        "Preço" => 89.90,
        "Categoria" => "Roupa"
    ],
    [
        "Nome" => "celular",
        "Preço" => 1929.99,
        "Categoria" => "Eletrônicos"
    ],
    [
        "Nome" => "teclado ",
        "Preço" => 109.50,
        "Categoria" => "Eletrônicos"
    ],
    [
        "Nome" => "Livro: Café com Deus Pai",
        "Preço" => 75.00,
        "Categoria" => "Livros"
    ],
    [
        "Nome" => "Salto",
        "Preço" => 199.90,
        "Categoria" => "Roupa"
    ]
];?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<style>
        table {
            width: 50%;
            margin-left: 25%;
            margin-top: 10%;
            border-collapse: collapse;
            text-align: center;
        }
        th, td {
            border: 1px solid #000;
            padding: 10px;
        }
        .vestimenta {
            background-color:rgb(27, 211, 243);
        }
        .eletronicos {
            background-color:rgb(226, 30, 193);
        }
        .livros {
            background-color:rgb(215, 248, 228);
        }
</style>
<body>
    <table>
        <tr>
            <th>Nome</th>
            <th>Preço</th>
            <th>Categoria</th>
        </tr>
        <?php          
            $listCategoria = ['Eletrônicos', 'Livros', 'Vestimenta']; 
            foreach ($produtos as $produto) {
                if (in_array($produto['Categoria'], $listCategoria)) {
                    if ($produto['Categoria'] == "Eletrônicos") {
                        echo "<tr class='eletronicos'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } elseif ($produto['Categoria'] == "Livros") {
                        echo "<tr class='livros'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } elseif ($produto['Categoria'] == "Roupa") {
                        echo "<tr class='Roupa'>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    } else {
                        echo "<tr>";
                        echo "<td>{$produto['Nome']}</td>";
                        echo "<td>R$ {$produto['Preço']}</td>";
                        echo "<td>{$produto['Categoria']}</td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
</body>
</html>