<?php

require('conecta.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta para paciente maior
$consulta_maior = "SELECT * FROM pacientemaior WHERE email = '$email'";
$resultado_maior = $conexao->query($consulta_maior);

// Consulta para paciente menor
$consulta_menor = "SELECT * FROM pacientemenor WHERE email = '$email'";
$resultado_menor = $conexao->query($consulta_menor);

// Consulta para médico
$consulta_medico = "SELECT * FROM medicos WHERE email = '$email'";
$resultado_medico = $conexao->query($consulta_medico);

// Consulta para desenvolvedor
$consulta_dev = "SELECT * FROM devs WHERE email = '$email'";
$resultado_dev = $conexao->query($consulta_dev);

// Consulta para recepcionista
$consulta_recepcionista = "SELECT * FROM recepcionistas WHERE email = '$email'";
$resultado_recepcionista = $conexao->query($consulta_recepcionista);

if ($resultado_maior->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_maior);
    if (password_verify($senha, $resultado_usuario['senha'])) { // Verifica a senha
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['tipo'] = 'paciente_maior';
        header('Location: paciente_maior.php');
    } else {
        header('Location: ../index.html'); // Senha incorreta
    }
} elseif ($resultado_menor->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_menor);
    if (password_verify($senha, $resultado_usuario['senha'])) { // Verifica a senha
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['tipo'] = 'paciente_menor';
        header('Location: paciente_menor.php');
    } else {
        header('Location: ../index.html'); // Senha incorreta
    }
} elseif ($resultado_medico->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_medico);
    if (password_verify($senha, $resultado_usuario['senha'])) { // Verifica a senha
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['tipo'] = 'medico';
        header('Location: medico.php');
    } else {
        header('Location: ../index.html'); // Senha incorreta
    }
} elseif ($resultado_dev->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_dev);
    if (password_verify($senha, $resultado_usuario['senha'])) { // Verifica a senha
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['tipo'] = 'dev';
        header('Location: index.php');
    } else {
        header('Location: ../index.html'); // Senha incorreta
    }
} elseif ($resultado_recepcionista->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_recepcionista);
    if (password_verify($senha, $resultado_usuario['senha'])) { // Verifica a senha
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        $_SESSION['tipo'] = 'recepcionista';
        header('Location: consultas.html');
    } else {
        header('Location: ../index.html'); // Senha incorreta
    }
} else {
    header('Location: ../index.html'); // Usuário não encontrado
}
?>
