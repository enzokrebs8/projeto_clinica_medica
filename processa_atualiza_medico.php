<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $email_novo = $_POST['email_novo'];
    $senha_nova = $_POST['senha_nova'];
    $telefone_novo = $_POST['telefone_novo'];
    $Especialidade_nova = $_POST['Especialidade_nova'];
    $RG_novo = $_POST['RG_novo'];
    $CPF_novo = $_POST['CPF_novo'];
    $CRM_novo = $_POST['CRM_novo'];
    $nascimento_novo = $_POST['nascimento_novo'];
    
    $consulta = "UPDATE medicos SET nome = '$nome_novo', email = '$email_novo', senha = '$senha_nova', telefone='$telefone_novo', Especialidade='$Especialidade_nova', RG='$RG_novo', CPF='$CPF_novo', CRM='$CRM_novo', CPF='$CPF_novo', nascimento='$nascimento_novo' WHERE id_cliente = '$id' ";

    $conexao->query($consulta);

    header('Location:index.php')

?>