<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome'];
    $CPF_novo = $_POST['CPF'];
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF_novo);
    $RG_novo = $_POST['RG'];
    $nascimento_novo = $_POST['nascimento'];
    $telefone_novo = $_POST['telefone'];
    $email_novo = $_POST['email'];
    $telefoneEmergencia_novo = $_POST['telefoneEmergencia'];
    $genero = $_POST['genero'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
    $IDEndereco_novo = $_POST['IDEndereco'];
    $IDPlanoSaude_novo = $_POST['IDPlanoSaude'];
    $IDResponsavel_novo = $_POST['IDResponsavel'];
    $relacaoResponsavel_novo = $_POST['relacaoResponsavel'];
    
    $consulta = "UPDATE pacientemenor SET nome = '$nome_novo', email = '$email_novo', senha = '$hash', telefone='$telefone_novo', telefoneEmergencia='$telefoneEmergencia_novo', RG='$RG_novo', CPF='$cpf_n', nascimento='$nascimento_novo', IDEndereco='$IDEndereco_novo', IDPlanoSaude='$IDPlanoSaude_novo', IDResponsavel='$IDResponsavel_novo', relacaoResponsavel='$relacaoResponsavel_novo' WHERE IDPacienteMenor = '$id'";

    $conexao->query($consulta);

    header('Location: index.php')

?>