<?php
require('conecta.php');

$id = $_GET['id'];

$sql = "SELECT * FROM solicitarconsulta WHERE idSolicitacao = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $dados = $result->fetch_assoc();

    $nome_paciente = $dados['nome_paciente'];
    $cpf_paciente = $dados['cpf_p'];
    $data_hora = $dados['data_hora'];
    $especialidade = $dados['especialidade'];
    $medico = $dados['medico'];
    $status = 'Aceito';
    $observacao = $dados['observacao'];

    $sql_paciente_maior = "SELECT nascimento FROM pacientemaior WHERE CPF = ?";
    $sql_paciente_menor = "SELECT nascimento FROM pacientemenor WHERE CPF = ?";
    
    $stmt_maior = $conexao->prepare($sql_paciente_maior);
    $stmt_maior->bind_param("s", $cpf_paciente);
    $stmt_maior->execute();
    $result_maior = $stmt_maior->get_result();

    $stmt_menor = $conexao->prepare($sql_paciente_menor);
    $stmt_menor->bind_param("s", $cpf_paciente);
    $stmt_menor->execute();
    $result_menor = $stmt_menor->get_result();

    if ($result_maior->num_rows > 0) {
        $dados_paciente = $result_maior->fetch_assoc();
        $tabela_destino = 'consultaspacientemaior';
    } elseif ($result_menor->num_rows > 0) {
        $dados_paciente = $result_menor->fetch_assoc();
        $tabela_destino = 'consultaspacientemenor';
    } else {
        die("Paciente não encontrado nas tabelas de pacientes.");
    }

    $sql_insert_paciente = "INSERT INTO $tabela_destino (nome_paciente, cpf_p, data_hora, especialidade, medico, status_c, observacao) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert_paciente = $conexao->prepare($sql_insert_paciente);
    $stmt_insert_paciente->bind_param("sssssss", $nome_paciente, $cpf_paciente, $data_hora, $especialidade, $medico, $status, $observacao);
    $stmt_insert_paciente->execute();

    $sql_insert_medico = "INSERT INTO consultasmedico (nome_paciente, cpf_p, data_hora, especialidade, medico, status_c, observacao) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt_insert_medico = $conexao->prepare($sql_insert_medico);
    $stmt_insert_medico->bind_param("sssssss", $nome_paciente, $cpf_paciente, $data_hora, $especialidade, $medico, $status, $observacao);
    $stmt_insert_medico->execute();

    $sql_delete = "DELETE FROM solicitarconsulta WHERE idSolicitacao = ?";
    $stmt_delete = $conexao->prepare($sql_delete);
    $stmt_delete->bind_param("i", $id);
    $stmt_delete->execute();

    header("Location: recepcionista.php");
    exit;
} else {
    die("Solicitação de consulta não encontrada.");
}
?>
