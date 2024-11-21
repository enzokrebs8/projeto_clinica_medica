<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] ?? null;
    $CPF = $_POST['CPF'] ?? null;
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sqlDev = "INSERT INTO devs (CPF, email, senha, nome,) VALUES (?, ?, ?, ?)";
    $stmtDev = $conexao->prepare($sqlDev);
    if ($stmtDev === false) {
        die("Erro na preparação da consulta de dev: " . $conexao->error);
    }

    $stmtDev->bind_param("sssss", $CPF, $email, $hash, $nome);

    if ($stmtDev->execute()) {
        echo "Dev cadastrado com sucesso!";
        header('Location: index.php'); 
        exit;
    } else {
        echo "Erro ao cadastrar dev: " . $stmtDev->error;
    }
}
?>