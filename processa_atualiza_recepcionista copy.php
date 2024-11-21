<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $RG = $_POST['RG'];
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $telefoneEmergencia = $_POST['telefoneEmergencia'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    $CEP = 'cep';
    $rua = 'rua';
    $bairro = 'bairro';
    $complemento = 'complemento';
    $cidade = 'cidade';
    $estado = 'estado';
    $numero = 'numero';
    
    $consulta = "UPDATE pacientemaior SET nome = '$nome_novo', email = '$email_novo', senha = '$hash', telefone='$telefone_novo', RG='$RG_novo', CPF='$CPF_novo', CPF='$CPF_novo', nascimento='$nascimento_novo' WHERE IDPacienteMaior = '$id', CEP='$CEP', rua='$rua', bairro='$bairro', complemento='$complemento', cidade='$cidade', estado='$estado', numero='$numero'";

    $conexao->query($consulta);

    header('Location: index.php')

?>