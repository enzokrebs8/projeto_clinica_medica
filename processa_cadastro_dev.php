<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF);
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sqlDev = "INSERT INTO devs (nome, CPF, email, senha) VALUES (?, ?, ?, ?)";
    $stmtDev = $conexao->prepare($sqlDev);
    if ($stmtDev === false) {
        die("Erro na preparação da consulta de dev: " . $conexao->error);
    }

    $stmtDev->bind_param("ssss", $nome, $cpf_n, $email, $hash);

    if ($stmtDev->execute()) {
        echo "Dev cadastrado com sucesso!";
        header('Location: index.php'); 
        exit;
    } else {
        echo "Erro ao cadastrar dev: " . $stmtDev->error;
    }
}
?>