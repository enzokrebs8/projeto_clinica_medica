<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $CPF_novo = $_POST['CPF_novo'];
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF_novo);
    $RG_novo = $_POST['RG_novo'];
    $rg_n = preg_replace('/[^0-9]/', '', $RG_novo);
    $nascimento_novo = $_POST['nascimento_novo'];
    $telefone_novo = $_POST['telefoneResp_novo'];
    $email_novo = $_POST['email_novo'];
    $senha = $_POST['senha_nova'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    $IDEndereco_novo = $_POST['IDEndereco_novo'];
    $IDPacienteMenor_novo = $_POST['IDPacienteMenor_novo'];
    
    $consulta = "UPDATE responsavel SET nome = '$nome_novo', email = '$email_novo', senha = '$hash', telefone='$telefone_novo', RG='$rg_n', CPF='$cpf_n', nascimento='$nascimento_novo', IDEndereco='$IDEndereco_novo', IDPacienteMenor ='$IDPacienteMenor_novo' WHERE IDResponsavel = '$id'";

    $conexao->query($consulta);

    header('Location: index.php')

?>