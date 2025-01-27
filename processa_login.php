<?php
session_start();
require('conecta.php');

$email = $conexao->real_escape_string($_POST['email']);
$senha = $conexao->real_escape_string($_POST['senha']);

$dadosTabelas = [
    'pacientemaior' => ['id' => 'IDPacienteMaior', 'redirect' => 'paciente_maior.php'],
    'pacientemenor' => ['id' => 'IDPacienteMenor', 'redirect' => 'paciente_menor.php'],
    'medicos' => ['id' => 'IDMedico', 'redirect' => 'medico.php'],
    'devs' => ['id' => 'CPF', 'redirect' => 'index.php'],
    'recepcionistas' => ['id' => 'IDRecepcionista', 'redirect' => 'recepcionista.php'],
    'responsavel' => ['id' => 'IDResponsavel', 'redirect' => 'responsavel.php']
];

$mensagemErro = "Usuário ou senha incorretos!";
foreach ($dadosTabelas as $tabela => $dados) {
    $campoID = $dados['id'];
    $redirect = $dados['redirect'];

    $query = "SELECT * FROM $tabela WHERE email = '$email'";
    $resultado = $conexao->query($query);

    if ($resultado && $resultado->num_rows == 1) {
        $usuario = $resultado->fetch_assoc();
        if (password_verify($senha, $usuario['senha'])) {
            $_SESSION['id'] = $usuario[$campoID];
            $_SESSION['nome'] = $usuario['nome'];
            $_SESSION['email'] = $usuario['email'];
            $_SESSION['senha'] = $usuario['senha'];
            $_SESSION['cpf'] = isset($usuario['CPF']) ? $usuario['CPF'] : null; // Verifica se CPF existe na tabela
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