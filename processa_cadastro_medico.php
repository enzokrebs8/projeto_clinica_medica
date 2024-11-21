<?php
include('conecta.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome = $_POST['nome'] 
    $CPF = $_POST['CPF'] 
    $cpf_n = preg_replace('/[^0-9]/', '', $CPF);
    $RG = $_POST['RG'];
    $Especialidade = $_POST['Especialidade'];
    $CRM = $_POST['CRM'];
    $nascimento = $_POST['nascimento'] 
    $telefone = $_POST['telefone'] 
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $hash = password_hash($senha, PASSWORD_BCRYPT);

    $sqlMedico = "INSERT INTO medicos (CPF, email, senha, RG, nome, Especialidade, nascimento, CRM, telefone) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmtMedico = $conexao->prepare($sqlMedico);
    if ($stmtMedico === false) {
        die("Erro na preparação da consulta de médico: " . $conexao->error);
    }

    $stmtMedico->bind_param("sssssssss", $cpf_n, $email, $hash, $RG, $nome, $Especialidade, $nascimento, $CRM, $telefone);

    if ($stmtMedico->execute()) {
        echo "Médico de idade cadastrado com sucesso!";
        header('Location: index.php'); 
        exit;
    } else {    
        echo "Erro ao cadastrar médico: " . $stmtMedico->error;
    }
}
?>