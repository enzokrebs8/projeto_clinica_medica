<?php
    require('conecta.php');

    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $nascimeto = $_POST['nascimeto'];
    $RG = $_POST['RG'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $telefoneEmegencia = $_POST['telefoneEmegencia'];
    $CPF = $_POST['CPF'];
    $IDPacienteMaior = $_POST['IDPacienteMaior'];
    $IDEndereco = $_POST['IDEndereco'];
    $IDPlanoSaude = $_POST['IDPlanoSaude'];

    $consulta = "INSERT INTO pacientemaior (genero,nascimento,RG,nome,email,senha,telefoneEmergencia,telefone,CPF,IDPacienteMaior,IDEndereco,IDPlanoSaude) VALUES ('$genero','$nascimento','$RG','$nome','$email','$senha','$telefoneEmergencia','$telefone','$CPF','$IDPacienteMaior','$IDEndereco','$IDPlanoSaude')";

    $conexao->query($consulta);

    header('Location: paciente.html');


?>