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
        'responsavel' => 'solicitar_consultas.php'
    ];

    foreach ($tabelas as $tabela => $redirect) {
        $query = "SELECT * FROM $tabela WHERE email = '$email'";
        $resultado = $conexao->query($query);

        if (!$resultado) {
            die("Erro na consulta: " . $conexao->error);
        }

        if ($resultado && $resultado->num_rows == 1) {
            $usuario = $resultado->fetch_assoc();
            if (password_verify($senha, $usuario['senha'])) {
                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['email'] = $usuario['email'];
                $_SESSION['senha'] = $usuario['senha'];
                $_SESSION['cpf'] = $usuario['CPF'];
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