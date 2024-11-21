<?php

    require('conecta.php');

   $id = $_GET['id'];

    $consulta = "DELETE from pacientemenor where IDPacienteMenor = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>