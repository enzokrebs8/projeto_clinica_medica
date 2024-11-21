<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data_hora = $_POST['data_hora'];
    $medico = $_POST['medico'];
    $especialidade = $_POST['especialidade'];

    session_start();
    $idPaciente = $_SESSION['id'];

    $sql = "INSERT INTO solicitarconsulta (data_hora, medico, especialidade, id_paciente) VALUES (?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sssi", $data_hora, $medico, $especialidade, $idPaciente);

    if ($stmt->execute()) {
        echo "Consulta solicitada com sucesso!";
        header('Location: paciente_maior.php');
        exit;
    } else {
        echo "Erro ao solicitar consulta: " . $stmt->error;
    }
}
?>