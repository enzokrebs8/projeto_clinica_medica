<?php
require('conecta.php');

$id = $_GET['id'];
$observacao = $_GET['observacao'];

$consulta = "UPDATE solicitarconsulta SET status_c = 'Negada', observacao = '$observacao' WHERE idSolicitacao = '$id'";
$conexao->query($consulta);

header('Location: recepcionista.php');
?>