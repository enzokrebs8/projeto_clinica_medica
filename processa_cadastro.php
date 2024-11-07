<?php

    require('conecta.php');

    // $nome = $_POST['nome'];
    // $genero = $_POST['genero'];
    // $nascimento = $_POST['nascimento'];
    // $RG = $_POST['RG'];
    // $CPF = $_POST['CPF'];
    // $email = $_POST['email'];
    // $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    // $telefone = $_POST['telefone'];
    // $telefoneEmergencia = $_POST['telefoneEmergencia'];
    // $IDEndereco = $_POST['IDEndereco'];
    // $IDPlanoSaude = $_POST['IDPlanoSaude'];

    $nome = 'Enzo Krebs Silva';
    $genero = 'Masculino';
    $nascimento = '2000-11-24';
    $RG = '123456789101';
    $CPF = '464867821';
    $email = 'enzok8@email.com';
    $senha = password_hash('123456', PASSWORD_DEFAULT);
    $telefone = '11 40028922';
    $telefoneEmergencia = '11 40028922';
    $endereco = '1';
    $NomePlano = 'SELECT IDPlanoSaude WHERE NomePlano = "$"';

    $data_atual = new DateTime();
    $data_nascimento_formatada = new DateTime($nascimento);
    $idade = $data_atual->diff($data_nascimento_formatada)->y;

    if ($idade >= 18) {
        $IDPacienteMaior = '1';
        $add = "INSERT INTO pacientemaior (genero, nascimento, RG, nome, email, senha, telefoneEmergencia, telefone, CPF, IDEndereco, IDPlanoSaude) VALUES ('$genero','$nascimento','$RG','$nome','$email','$senha','$telefoneEmergencia','$telefone','$CPF','$IDEndereco','$IDPlanoSaude')";
        echo "Qualquer coisa";
        $conexao->query($add);
        header('Location: login.html');
    } else {
        $IDPacienteMenor = $_POST['IDPacienteMenor'];
        $relacaoResponsavel = $_POST['relacaoResponsavel'];
        $IDResponsavel = $_POST['IDResponsavel'];
        echo "Qualquer coisa";
        return 0;
        $add = "INSERT INTO pacientemenor (IDPacienteMenor, relacaoResponsavel, telefone, telefoneEmergencia, nascimento, email, senha, nome, RG, CPF, genero, IDResponsavel, IDEndereco, IDPlanoSaude) VALUES ('$IDPacienteMenor','$relacaoResponsavel','$telefone','$telefoneEmergencia','$nascimento','$email','$senha','$nome','$RG','$CPF','$genero','$IDResponsavel','$IDEndereco','$IDPlanoSaude')";
        $conexao->query($add);
        header('Location: login.html');
        
    }

?>