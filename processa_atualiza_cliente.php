<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $email_novo = $_POST['email_novo'];
    $telefone_novo = $_POST['telefone_novo'];


    // Agora criar a String de UPDATE e executar
    // Direcionar para a index.php

    $consulta = "UPDATE pacientemenor SET nome = '$nome_novo', email = '$email_novo',telefone='$telefone_novo' WHERE id_cliente = '$id' ";

    $conexao->query($consulta);

    header('Location:index.php')

?>