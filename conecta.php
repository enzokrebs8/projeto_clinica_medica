<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "clinicamedica";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    if(mysqli_connect_errno()){
        echo "Erro na conexão com o Banco de Dados!";
    }
    // else{
    //     echo "CONECTADO AO BANCO COM SUCESSO!";
    // }
?>