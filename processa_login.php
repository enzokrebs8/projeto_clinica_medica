<?php
session_start();
require('conecta.php');

$email = $conexao->real_escape_string($_POST['email']);
$senha = $conexao->real_escape_string($_POST['senha']);

$tabelas = [
    'pacientemaior' => 'paciente_maior.php',
    'pacientemenor' => 'paciente_menor.php',
    'medicos' => 'medico.php',
    'devs' => 'index.php',
    'recepcionistas' => 'recepcionista.php'
];

foreach ($tabelas as $tabela => $redirect) {
    $query = "SELECT * FROM $tabela WHERE email = '$email'";
    $resultado = $conexao->query($query);

    if ($resultado && $resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['cpf'] = $usuario['CPF'];
            $_SESSION['tipo'] = $tabela;
            header("Location: $redirect");
            exit;
        } else {
            $mensagem = "Usuário ou senha incorretos!";
            echo "<script>alert('$mensagem');window.location.href = 'login.html';</script>";
            exit;
        }
    }
}
?>