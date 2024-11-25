<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'];
    $CPF = $_POST['CPF'];
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF);
    $RG = $_POST['RG'];
    $rg_n = preg_replace('/[^0-9]/', '', $RG);
    $nascimento = $_POST['nascimento'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sqlRecep = "INSERT INTO recepcionistas (CPF, email, senha, RG, nome, nascimento, telefone) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmtRecep = $conexao->prepare($sqlRecep);
    if ($stmtRecep === false) {
        die("Erro na preparação da consulta de Recepcionista: " . $conexao->error);
    }

    $stmtRecep->bind_param("sssssss", $cpf_n, $email, $hash, $rg_n, $nome, $nascimento, $telefone);

    if ($stmtRecep->execute()) {
        echo "Recepcionista cadastrado com sucesso!";
        header('Location: index.php'); 
        exit;
    } else {    
        echo "Erro ao cadastrar Recepcionista: " . $stmtRecep->error;
    }
}
?>