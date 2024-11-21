<?php
    require('conecta.php');

    $id = $_GET['id'];
    $status = $_POST['status_c'];
    $observacao = $_POST['observacao'];

    $consulta = "UPDATE solicitarconsulta SET status_c = 'Negada' WHERE idSolicitacao = '$idsolicit'";
    $conexao->query($consulta);

    header('Location:recepcionista.php')

?>