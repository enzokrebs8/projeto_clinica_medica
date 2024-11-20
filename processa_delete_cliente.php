<?php

    require('conecta.php');

   $id = $_GET['id'];

    $consulta = "DELETE from pacientemenor where idPacienteMenor = '$id'";

    $conexao->query($consulta);

    header('Location:index.php');
?>