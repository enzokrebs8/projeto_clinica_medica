<?php
    require('conecta.php');

    $CEP = 'cep';
    $rua = 'rua';
    $bairro = 'bairro';
    $complemento = 'complemento';
    $cidade = 'cidade';
    $estado = 'estado';
    $numero = 'numero';
    
    $consulta = "UPDATE endereco SET CEP='$CEP', rua='$rua', bairro='$bairro', complemento='$complemento', cidade='$cidade', estado='$estado', numero='$numero' WHERE IDEndereco = '$id'";

    $conexao->query($consulta);

    header('Location: index.php')

?>