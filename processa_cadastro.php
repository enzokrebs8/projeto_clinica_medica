<?php

require('conecta.php');

$nome = $_POST['nome'];
$genero = $_POST['genero'];
$nascimento = $_POST['nascimento'];
$RG = $_POST['RG'];
$CPF = $_POST['CPF'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
$telefone = $_POST['telefone'];
$telefoneEmergencia = $_POST['telefoneEmergencia'];
$CEP = 'cep';
$rua = 'rua';
$bairro = 'bairro';
$complemento = 'complemento';
$cidade = 'cidade';
$estado = 'estado';
$numero = 'numero';
$NomePlano = $_POST['NomePlano'];

$stmtEndereco = $conexao->prepare("INSERT INTO endereco (CEP, complemento, bairro, estado, cidade, numero, rua) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmtEndereco->bind_param("sssssss", $CEP, $complemento, $bairro, $estado, $cidade, $numero, $rua);

if ($stmtEndereco->execute()) {
    $IDEnderecoQuery = "SELECT IDEndereco FROM endereco WHERE CEP = ? AND numero = ?";
    $stmtID = $conexao->prepare($IDEnderecoQuery);
    $stmtID->bind_param("ss", $CEP, $numero);
    $stmtID->execute();
    $resultadoIDEndereco = $stmtID->get_result();

    if ($resultadoIDEndereco && $resultadoIDEndereco->num_rows > 0) {
        $IDEndereco = $resultadoIDEndereco->fetch_assoc()['IDEndereco'];

        if (isset($_POST['NomePlano'])) {
            $IDPlanoSaudeQuery = "SELECT IDPlanoSaude FROM planosaude WHERE NomePlano = ?";
            $stmtPlano = $conexao->prepare($IDPlanoSaudeQuery);
            $stmtPlano->bind_param("s", $NomePlano);
            $stmtPlano->execute();
            $resultadoIDPlanoSaude = $stmtPlano->get_result();

            if ($resultadoIDPlanoSaude && $resultadoIDPlanoSaude->num_rows > 0) {
                $IDPlanoSaude = $resultadoIDPlanoSaude->fetch_assoc()['IDPlanoSaude'];

                $data_atual = new DateTime();
                $data_nascimento_formatada = new DateTime($nascimento);
                $idade = $data_atual->diff($data_nascimento_formatada)->y;

                if ($idade >= 18) {
                    $add = "INSERT INTO pacientemaior (genero, nascimento, RG, nome, email, senha, telefoneEmergencia, telefone, CPF, IDEndereco, IDPlanoSaude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                    $stmtPacienteMaior = $conexao->prepare($add);
                    $stmtPacienteMaior->bind_param("sssssssssss", $genero, $nascimento, $RG, $nome, $email, $senha, $telefoneEmergencia, $telefone, $CPF, $IDEndereco, $IDPlanoSaude);
                    $stmtPacienteMaior->execute();
                    echo "Paciente maior de idade cadastrado com sucesso.";
                } else {
                    if (isset($_POST['IDPacienteMenor'], $_POST['relacaoResponsavel'], $_POST['IDResponsavel'])) {
                        $IDPacienteMenor = $_POST['IDPacienteMenor'];
                        $relacaoResponsavel = $_POST['relacaoResponsavel'];
                        $IDResponsavel = $_POST['IDResponsavel'];

                        $add = "INSERT INTO pacientemenor (IDPacienteMenor, relacaoResponsavel, telefone, telefoneEmergencia, nascimento, email, senha, nome, RG, CPF, genero, IDResponsavel, IDEndereco, IDPlanoSaude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmtPacienteMenor = $conexao->prepare($add);
                        $stmtPacienteMenor->bind_param("sssssssssssss", $IDPacienteMenor, $relacaoResponsavel, $telefone, $telefoneEmergencia, $nascimento, $email, $senha, $nome, $RG, $CPF, $genero, $IDResponsavel, $IDEndereco, $IDPlanoSaude);
                        $stmtPacienteMenor->execute();
                        echo "Paciente menor de idade cadastrado com sucesso.";
                    } else {
                        echo "Dados do responsável não foram fornecidos para o paciente menor.";
                    }
                }
            } else {
                echo "Plano de saúde não encontrado.";
            }
        } else {
            echo "Nome do plano de saúde não foi fornecido.";
        }
    } else {
        echo "Endereço não encontrado após a inserção.";
    }
} else {
    echo "Erro ao inserir o endereço: " . $stmtEndereco->error;
}

$stmtEndereco->close();
$conexao->close();
?>