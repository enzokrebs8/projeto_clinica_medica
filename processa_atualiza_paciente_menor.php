<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nom_novo'];
    $CPF_novo = $_POST['CPF_novo'];
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF_novo);
    $RG_novo = $_POST['RG_novo'];
    $nascimento_novo = $_POST['nascimento_novo'];
    $telefone_novo = $_POST['telefoneResp_novo'];
    $email_novo = $_POST['email_novo'];
    $genero = $_POST['genero_novo'];
    $senha = $_POST['senha_nova'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    $telefoneEmergencia_novo = $_POST['telefoneEmergencia'];
    $IDEndereco_novo = $_POST['IDEndereco'];
    $IDPlanoSaude_novo = $_POST['IDPlanoSaude'];
    $IDResponsavel_novo = $_POST['IDResponsavel'];
    $relacaoResponsavel_novo = $_POST['relacaoResponsavel'];
    
    $consulta = "UPDATE pacientemenor SET nome = '$nome_novo', email = '$email_novo', senha = '$hash', telefone='$telefone_novo', telefoneEmergencia='$telefoneEmergencia_novo', RG='$RG_novo', CPF='$cpf_n', nascimento='$nascimento_novo', IDEndereco='$IDEndereco_novo', IDPlanoSaude='$IDPlanoSaude_novo', IDResponsavel='$IDResponsavel_novo', relacaoResponsavel='$relacaoResponsavel_novo' WHERE IDPacienteMenor = '$id'";

    $conexao->query($consulta);

    header('Location: index.php')

?>