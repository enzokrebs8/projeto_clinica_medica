<?php

    session_start();

    require('conecta.php');
    $email = $_POST['email'];
    $senha = md5($_POST['senha']);

    $consulta = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";

    $resultado = $conexao->query($consulta);
    $registros = $resultado->num_rows;
    $resultado_usuario = mysqli_fetch_assoc($resultado);
    
    //var_dump($resultado_usuario);

    if($registros == 1){
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['email'] = $resultado_usuario['email'];

        header('Location: index.php');

    }
    else{
        //echo "NÃO ACHEI";        
        header('Location: ../index.html');
    }



?>