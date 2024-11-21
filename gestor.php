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
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Data/Hora</th>
                        <th>Médico</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM solicitarconsulta";
                        $consulta = $conexao->query($sql);
                        while($dados = $consulta->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$dadoss['idSolicitacao']."</td>";
                            echo "<td>".$dados['data_hora']."</td>";
                            echo "<td>".$dados['especialidade']."</td>";
                            echo "<td>".$dados['nome_paciente']."</td>";
                            echo "<td>".$dados['status']."</td>";
                            echo "<td>
                                <a class='btn btn-info' href='aceitar.php?id=".$dados['idSolicitacao']."'>Aprovar</a>
                                <a class='btn btn-danger' href='negar.php?id=".$dados['idSolicitacao']."'>Negar</a>
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
