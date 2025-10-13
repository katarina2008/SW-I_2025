<?php
    session_start();
    include_once 'conexao.php';

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    //echo $senha;

    $consulta = "SELECT * FROM usuarios WHERE email = :email AND senha = :senha";

    $stmt = $pdo->prepare($consulta);

    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':senha', $senha);

    // Executa a consulta
    $stmt->execute();

    // Obtém o número de registros encontrados
    $num_registros = $stmt->rowCount();

    // Obtém o resultado
    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    // Exibe o número de registros encontrados no banco de dados
    //var_dump ($resultado);

    //echo $resultado['email'];

    if($num_registros == 0){
       //echo "Email ou senha incorretos";
       header('Location: index.php');
        
    }else{
        

        $_SESSION['id'] = $resultado['id'];
        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];
        header('Location: restrita.php');
        //echo "Acesso permitido para a restrita.php";
    }
?>