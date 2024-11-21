<?php

    require('conecta.php');

    $id = $_GET['id'];

    $consulta = "DELETE from endereco where IDEndereco = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>