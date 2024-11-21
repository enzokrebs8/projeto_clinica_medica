<?php
require('conecta.php');

$cpf = $_POST['cpf_p'];

$sql_maior = "SELECT * FROM pacientemaior WHERE CPF = '$cpf'";
$sql_menor = "SELECT * FROM pacientemenor WHERE CPF = '$cpf'";

$result_maior = $conexao->query($sql_maior);
$result_menor = $conexao->query($sql_menor);

if ($result_maior->num_rows > 0) {
    $dados_paciente = $result_maior->fetch_assoc();
} elseif ($result_menor->num_rows > 0) {
    $dados_paciente = $result_menor->fetch_assoc();
} else {
    die("Paciente não encontrado. Verifique o CPF e tente novamente.");
}

$nome_paciente = $dados_paciente['nome'];
$data_nascimento = $dados_paciente['nascimento'];

$data_hora = $_POST['data_hora'];
$medico = $_POST['medico'];
$especialidade = $_POST['especialidade'];
$observacao = $_POST['observacao'];

$sql_insert = "INSERT INTO solicitarconsulta (nome_paciente, cpf_p, data_hora, medico, especialidade, observacao) VALUES ('$nome_paciente', '$cpf', '$data_hora', '$medico', '$especialidade', '$observacao')";

if ($conexao->query($sql_insert)) {
    header('Location: sucesso.php');
} else {
    echo "Erro ao solicitar consulta: " . $conexao->error;
}

?>
