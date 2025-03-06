<?php
    $login = $_POST['cxlogin'];
    $senha = $_POST['cxsenha'];
   
   
     if  ( $login == "Etec" &&  $senha == "Informática") {
        echo "logado com sucesso";
     }
?>