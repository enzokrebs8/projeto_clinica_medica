<?php

    require('conecta.php');

   $id = $_GET['id'];

    $consulta = "DELETE from pacientemaior where IDPacienteMaior = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>