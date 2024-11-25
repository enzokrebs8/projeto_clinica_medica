<?php
    require('conecta.php');

    $id = $_GET['id'];
    $nome_novo = $_POST['nome_novo'];
    $contato_novo = $_POST['contato_novo'];
    
    $consulta = "UPDATE planosaude SET NomePlano = '$nome_novo', ContatoCentralPlano = '$contato_novo', WHERE IDPlanoSaude = '$id'";

    $conexao->query($consulta);

    header('Location: index.php')

?>