<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $nascimeto = $_POST['nascimeto'];
    $RG = $_POST['RG'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $CPF = $_POST['CPF'];
    $Especialidade = $_POST['Especialidade'];
    $CRM = $_POST['CRM'];

    $consulta = "INSERT INTO medicos (CPF,email,senha,RG,nome,Especialidade,nascimento,CRM,telefone) VALUES ('$CPF','$email','$senha','$RG','$nome','$Especialidade','$nascimento','$CRM','$telefone',)";

    $conexao->query($consulta);

    header('Location: paciente.html');


?>