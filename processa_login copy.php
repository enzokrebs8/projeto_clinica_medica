<?php

require('conecta.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta_maior = "SELECT * FROM pacientemaior WHERE email = '$email'";
$resultado_maior = $conexao->query($consulta_maior);

$consulta_menor = "SELECT * FROM pacientemenor WHERE email = '$email'";
$resultado_menor = $conexao->query($consulta_menor);

$consulta_medico = "SELECT * FROM medicos WHERE email = '$email'";
$resultado_medico = $conexao->query($consulta_medico);

$consulta_dev = "SELECT * FROM devs WHERE email = '$email'";
$resultado_dev = $conexao->query($consulta_dev);

$consulta_recepcionista = "SELECT * FROM recepcionistas WHERE email = '$email'";
$resultado_recepcionista = $conexao->query($consulta_recepcionista);

if ($resultado_maior->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_maior);
    if (password_verify($senha, $resultado_usuario['senha'])) {
        header('Location: paciente_maior.php');
    }
} elseif ($resultado_menor->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_menor);
    if (password_verify($senha, $resultado_usuario['senha'])) {
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        header('Location: paciente_menor.php');
    } else {
        header('Location: index.html');
    }
} elseif ($resultado_medico->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_medico);
    if (password_verify($senha, $resultado_usuario['senha'])) {
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        header('Location: medico.php');
    } else {
        header('Location: index.html');
    }
} elseif ($resultado_dev->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_dev);
    if (password_verify($senha, $resultado_usuario['senha'])) {
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        header('Location: index.php');
    } else {
        header('Location: index.html');
    }
} elseif ($resultado_recepcionista->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_recepcionista);
    if (password_verify($senha, $resultado_usuario['senha'])) {
        $_SESSION['id'] = $resultado_usuario['id'];
        $_SESSION['nome'] = $resultado_usuario['nome'];
        header('Location: consultas.html');
    } else {
        header('Location: index.html');
    }
} else {
    header('Location: index.html');
}
?>
