<?php
    require('conecta.php');

    $idsolicit = $_GET['idSolicitacao'];
    $status_aceito = $_POST['status'];

    $consulta = "UPDATE solicitarconsulta SET `status` = 'Aprovada' WHERE idSolicit = '$idsolicit'";
    $conexao->query($consulta);

    header('Location:gestor.php')

?>