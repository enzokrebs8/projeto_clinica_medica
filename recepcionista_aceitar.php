<?php
require('conecta.php');

$id = $_GET['id'];

$sql_solicitacao = "SELECT * FROM solicitarconsulta WHERE idSolicitacao = '$id'";
$result_solicitacao = $conexao->query($sql_solicitacao);

if ($result_solicitacao->num_rows > 0) {
    $dados_solicitacao = $result_solicitacao->fetch_assoc();
    $cpf_paciente = $dados_solicitacao['cpf_p'];

    $sql_maior = "SELECT nascimento FROM pacientemaior WHERE CPF = '$cpf_paciente'";
    $sql_menor = "SELECT nascimento FROM pacientemenor WHERE CPF = '$cpf_paciente'";
    
    $result_maior = $conexao->query($sql_maior);
    $result_menor = $conexao->query($sql_menor);

    if ($result_maior->num_rows > 0) {
        $dados_paciente = $result_maior->fetch_assoc();
    } elseif ($result_menor->num_rows > 0) {
        $dados_paciente = $result_menor->fetch_assoc();
    } else {
        die("Paciente não encontrado nas tabelas.");
    }

    $data_atual = new DateTime();
    $data_nascimento = new DateTime($dados_paciente['nascimento']);
    $idade = $data_atual->diff($data_nascimento)->y;

    $tabela_destino = ($idade >= 18) ? 'consultaspacientemaior' : 'consultaspacientemenor';

    $sql_insert = "INSERT INTO $tabela_destino ( nome_paciente, cpf_p, data_hora, especialidade, medico, status_c, observacao) VALUES ('{$dados_solicitacao['nome_paciente']}', '$cpf_paciente', '{$dados_solicitacao['data_hora']}', '{$dados_solicitacao['especialidade']}', '{$dados_solicitacao['medico']}', 'Aprovada', '{$dados_solicitacao['observacao']}')";

    if ($conexao->query($sql_insert)) {
        $sql_insert2 = "INSERT INTO consultasmedico ( nome_paciente, cpf_p, data_hora, especialidade, medico, status_c, observacao) VALUES ('{$dados_solicitacao['nome_paciente']}', '$cpf_paciente', '{$dados_solicitacao['data_hora']}', '{$dados_solicitacao['especialidade']}', '{$dados_solicitacao['medico']}', 'Aprovada', '{$dados_solicitacao['observacao']}')";
        $sql_delete = "DELETE FROM solicitarconsulta WHERE idSolicitacao = '$id'";
        $conexao->query($sql_insert2);
        $conexao->query($sql_delete);

        header('Location: recepcionista.php');
    } else {
        echo "Erro ao mover a consulta: " . $conexao->error;
    }
} else {
    echo "Solicitação não encontrada.";
}
?>
