<?php

    require('conecta.php');

   $id = $_GET['id'];

    $consulta = "DELETE from responsavel where IDResponsavel = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>