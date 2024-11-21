<?php
    include 'conecta.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestão de Consultas</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="soninho">
    <div class="container cirilo">
        <h1>Gestão de Consultas</h1> 
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID da Solicitação</th>
                        <th>Data/Hora</th>
                        <th>Nome do Paciente</th>
                        <th>CPF do Paciente</th>
                        <th>Especialidade</th>
                        <th>Nome do Médico</th>
                        <th>Status</th>
                        <th>Observações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM `solicitarconsulta`";
                        $consulta = $conexao->query($sql);
                        while($dados = $consulta->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$dados['idSolicitacao']."</td>";
                            echo "<td>".$dados['data_hora']."</td>";
                            echo "<td>".$dados['nome_paciente']."</td>";
                            echo "<td>".$dados['cpf_p']."</td>";
                            echo "<td>".$dados['especialidade']."</td>";
                            echo "<td>".$dados['medico']."</td>";
                            echo "<td>".$dados['status']."</td>";
                            echo "<td>".$dados['observacao']."</td>";
                            echo "<td>
                                <a class='btn btn-info' href='recepcionista_aceitar.php?id=".$dados['idSolicitacao']."'>Aprovar</a>
                                <a class='btn btn-danger' href='recepcionista_negar.php?id=".$dados['idSolicitacao']."'>Negar</a>
                            </td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="cansei">
            <a href="agenda.html" class="sos">Consultar Agenda</a>
    </div>
</body>
</html>
