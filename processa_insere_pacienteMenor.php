<?php
    require('conecta.php');

    $IDPacienteMenor = $_POST['IDPacienteMenor'];
    $nome = $_POST['nome'];
    $genero = $_POST['genero'];
    $nascimeto = $_POST['nascimeto'];
    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];
    $telefoneEmegencia = $_POST['telefoneEmegencia'];
    $relacaoResponsavel = $_POST['relacaoResponsavel'];
    $IDEndereco = $_POST['IDEndereco'];
    $IDPlanoSaude = $_POST['IDPlanoSaude'];
    $IDResponsavel = $_POST['IDResponsavel'];

    $consulta = "INSERT INTO pacientemenor (IDPacienteMenor,relacaoResponsavel,telefone,telefoneEmergencia,nascimento,email,senha,nome,RG,CPF,genero,IDResponvael,IDEndereco,IDPlanoSaude) VALUES ('$IDPacienteMenor','$relacaoResponsavel','$telefone','$telefoneEmergencia','$nascimento','$email','$senha','$nome','$RG','$CPF','$genero','$IDResponsavel','$IDEndereco','$IDPlanoSaude')";

    $conexao->query($consulta);

    header('Location: paciente.html');

?>