<?php
require('conecta.php');

$email = $conexao->real_escape_string($_POST['email']);
$senha = $conexao->real_escape_string($_POST['senha']);

$tabelas = [
    'pacientemaior' => 'paciente_maior.php',
    'pacientemenor' => 'paciente_menor.php',
    'medicos' => 'medico.php',
    'devs' => 'index.php',
    'recepcionistas' => 'gestor.php'
];

$usuarioEncontrado = false; // Variável para controlar se o usuário foi encontrado

foreach ($tabelas as $tabela => $redirect) {
    echo "Consultando a tabela: $tabela\n";
    $query = "SELECT * FROM $tabela WHERE email = '$email'";
    $resultado = $conexao->query($query);

    if (!$resultado) {
        die("Erro na consulta: " . $conexao->error); // Adicione esta linha
    }

    if ($resultado && $resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $usuarioEncontrado = true; // Marca que o usuário foi encontrado
            header("Location: $redirect");
            exit; // Para garantir que o script pare após o redirecionamento
        } else {
            $mensagem = "Usuário ou senha incorretos!";
            // echo "<script>alert('$mensagem');window.location.href = 'login.html';</script>";
            exit; // Para garantir que o script pare após o alerta
        }
    }
}
?>