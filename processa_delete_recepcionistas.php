<?php

    require('conecta.php');

   $id = $_GET['id'];

    $consulta = "DELETE from recepcionistas where IDRecepcionista = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>