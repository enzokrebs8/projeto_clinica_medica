<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "cadastro_cliente";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        echo "ERRO DE CONEXÃO!";
    }
    // else{
    //     echo "CONECTADO AO BANCO COM SUCESSO!";
    // }
?>