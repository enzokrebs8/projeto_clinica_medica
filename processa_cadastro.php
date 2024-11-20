<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;
    $CPF = $_POST['CPF'] ?? null;
    $RG = $_POST['RG'];
    $nascimento = $_POST['nascimento'] ?? null;
    $telefone = $_POST['telefone'] ?? null;
    $email = $_POST['email'];
    $telefoneEmergencia = $_POST['telefoneEmergencia'];
    $genero = $_POST['genero'] ?? null;
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);
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

                    $dataAtual = new DateTime();
                    $dataNasc = new DateTime($nascimento);
                    $idade = $dataAtual->diff($dataNasc)->y;

                    if ($idade < 18) {
                        $nomeResponsavel = $_POST['nome_responsavel'] ?? null;
                        $cpfResponsavel = $_POST['cpf_responsavel'] ?? null;
                        $rgResponsavel = $_POST['rg_responsavel'] ?? null;
                        $emailResponsavel = $_POST['email_responsavel'] ?? null;
                        $nascimentoResponsavel = $_POST['nascimento_responsavel'] ?? null;
                        $relacaoResponsavel = $_POST['relacaoResponsavel'] ?? null;
                        $telefoneResp = $_POST['telefoneResp'] ?? null;

                        $sqlResponsavel = "INSERT INTO responsavel (nome, CPF, RG, telefoneResp , email, nascimento, IDEndereco) VALUES (?, ?, ?, ?, ?, ?, ?)";
                        $stmtResponsavel = $conexao->prepare($sqlResponsavel);
                        if ($stmtResponsavel === false) {
                            die("Erro na preparação da consulta do responsável: " . $conexao->error);
                        }
                        $stmtResponsavel->bind_param("ssssssi", $nomeResponsavel, $cpfResponsavel, $rgResponsavel, $telefoneResp, $emailResponsavel, $nascimentoResponsavel, $IDEndereco);

                        if ($stmtResponsavel->execute()) {
                            $idResponsavel = $stmtResponsavel->insert_id;

                            $sqlPacienteMenor = "INSERT INTO pacientemenor (relacaoResponsavel, telefone, telefoneEmergencia, nascimento, email, senha, nome, RG, CPF, genero, IDResponsavel, IDEndereco, IDPlanoSaude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                            $stmtPacienteMenor = $conexao->prepare($sqlPacienteMenor);
                            if ($stmtPacienteMenor === false) {
                                die("Erro na preparação da consulta do paciente menor: " . $conexao->error);
                            }

                            $stmtPacienteMenor->bind_param("ssssssssssiii", $relacaoResponsavel, $telefone, $telefoneEmergencia, $nascimento, $email, $hash, $nome, $RG, $CPF, $genero, $IDResponsavel, $IDEndereco, $IDPlanoSaude);

                            if ($stmtPacienteMenor->execute()) {
                                echo "Paciente menor de idade cadastrado com sucesso!";
                                header('Location: login.html');
                                exit;
                            } else {
                                echo "Erro ao cadastrar o paciente menor de idade: " . $stmtPacienteMenor->error;
                            }
                            } else {
                                echo "Erro ao cadastrar o responsável: " . $stmtResponsavel->error;
                            }
                    } else {
                        $sqlPacienteMaior = "INSERT INTO pacientemaior (genero, nascimento, RG, nome, email, senha, telefoneEmergencia, telefone, CPF, IDEndereco, IDPlanoSaude) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmtPacienteMaior = $conexao->prepare($sqlPacienteMaior);
                        if ($stmtPacienteMaior === false) {
                            die("Erro na preparação da consulta do paciente maior: " . $conexao->error);
                        }

                        $stmtPacienteMaior->bind_param("sssssssssii", $genero, $nascimento, $RG, $nome, $email, $hash, $telefoneEmergencia, $telefone, $CPF, $IDEndereco, $IDPlanoSaude);

                        if ($stmtPacienteMaior->execute()) {
                            echo "Paciente maior de idade cadastrado com sucesso!";
                            header('Location: login.html'); 
                            exit;
                        } else {
                            echo "Erro ao cadastrar o paciente maior de idade: " . $stmtPacienteMaior->error;
                        }
                    }
                }
            }
        }
    }
}
?>