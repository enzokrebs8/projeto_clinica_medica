<?php

    require('conecta.php');

    $id = $_GET['id'];

    $consulta = "DELETE from medicos where IDMedico = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>