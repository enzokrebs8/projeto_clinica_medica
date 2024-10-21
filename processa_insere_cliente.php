<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];

    $consulta = "INSERT INTO clientes (nome_cliente,email_cliente,telefone) VALUES ('$nome','$email','$telefone')";

    $conexao->query($consulta);

    header('Location: index.php');


?>