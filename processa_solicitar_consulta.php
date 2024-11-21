<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome_paciente'];
    $data_hora = $_POST['data_hora'];
    $medico = $_POST['medico'];
    $especialidade = $_POST['especialidade'];
    $observacao = $_POST['observacao'];
    $cpf_p = $_POST['cpf_p'];

    $sql = "INSERT INTO solicitarconsulta (data_hora, medico, nome_paciente, cpf_p, especialidade, observacao) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssss", $data_hora, $medico, $nome, $cpf_p, $especialidade, $observacao);

    if ($stmt->execute()) {
        echo "Consulta solicitada com sucesso!";
        header('Location: paciente_maior.php');
        exit;
    } else {
        echo "Erro ao solicitar consulta: " . $stmt->error;
    }
}
?>