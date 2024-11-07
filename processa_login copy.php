<?php
require('conecta.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

$consulta_maior = "SELECT * FROM pacientemaior WHERE email = '$email' AND senha = '$senha'";
$resultado_maior = $conexao->query($consulta_maior);

$consulta_menor = "SELECT * FROM pacientesmenor WHERE email = '$email' AND senha = '$senha'";
$resultado_menor = $conexao->query($consulta_menor);

$consulta_medico = "SELECT * FROM medicos WHERE email = '$email' AND senha = '$senha'";
$resultado_medico = $conexao->query($consulta_medico);

$consulta_dev = "SELECT * FROM devs WHERE email = '$email' AND senha = '$senha'";
$resultado_dev = $conexao->query($consulta_medico);

$consulta_recepcionista = "SELECT * FROM recepcionistas WHERE email = '$email' AND senha = '$senha'";
$resultado_recepcionista = $conexao->query($consulta_medico);

if ($resultado_maior->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_maior);
    $_SESSION['id'] = $resultado_usuario['id'];
    $_SESSION['nome'] = $resultado_usuario['nome'];
    $_SESSION['tipo'] = 'paciente_maior';

    header('Location: paciente_maior.php');

} elseif ($resultado_menor->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_menor);
    $_SESSION['id'] = $resultado_usuario['id'];
    $_SESSION['nome'] = $resultado_usuario['nome'];
    $_SESSION['tipo'] = 'paciente_menor';

    header('Location: paciente_menor.php');

} elseif ($resultado_medico->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_medico);
    $_SESSION['id'] = $resultado_usuario['id'];
    $_SESSION['nome'] = $resultado_usuario['nome'];
    $_SESSION['tipo'] = 'medico';

    header('Location: medico.php');

} elseif ($resultado_dev->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_menor);
    $_SESSION['id'] = $resultado_usuario['id'];
    $_SESSION['nome'] = $resultado_usuario['nome'];
    $_SESSION['tipo'] = 'dev';

    header('Location: index.php');

} elseif ($resultado_recepcionista->num_rows == 1) {
    $resultado_usuario = mysqli_fetch_assoc($resultado_menor);
    $_SESSION['id'] = $resultado_usuario['id'];
    $_SESSION['nome'] = $resultado_usuario['nome'];
    $_SESSION['tipo'] = 'recepcionista';

    header('Location: consultas.html');

}else {
    header('Location: ../index.html');
}
?>
