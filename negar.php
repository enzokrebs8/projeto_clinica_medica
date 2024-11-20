<?php
    require('conecta.php');

    $idsolicit = $_GET['idSolicitacao'];
    $status = $_POST['status'];
    $observacao = $_POST['observacao'];

    $consulta = "UPDATE solicitarconsulta SET `status` = 'Negada' WHERE idSolicit = '$idsolicit'";
    $conexao->query($consulta);

    header('Location:gestor.php')

?>