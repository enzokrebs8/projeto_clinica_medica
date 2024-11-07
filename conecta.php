<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "clinicamedica";

    $conexao = new mysqli($servidor,$usuario,$senha,$banco);

    $sql= "SET NAMES utf8'";
    mysqli_query($conexao, $sql);
    $sql= 'SET NAMES character_set_connection=utf8';
    mysqli_query($conexao, $sql); 
    $sql= 'SET NAMES character_set_client=utf8';
    mysqli_query($conexao, $sql); 
    $sql= 'SET character_set_results=utf8';
    mysqli_query($conexao, $sql); 


    if(mysqli_connect_errno()){
        echo "Erro na conexão com o Banco de Dados!";
    }   
?>