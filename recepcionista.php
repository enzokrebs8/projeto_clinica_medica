<?php
    
    include('conecta.php');

    session_start();
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'recepcionistas') {
        header('Location: login.html');
        exit();
    }
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
    <script>
    function negateRequest(id) {
        var observacao = prompt("Por favor, insira as observações para a negação:");

        if (observacao !== null && observacao.trim() !== "") {
            window.location.href = 'recepcionista_negar.php?id=' + id + '&observacao=' + encodeURIComponent(observacao);
        } else {
            alert("As observações são necessárias para negar a solicitação.");
        }
    }
</script>
</head>
<a class="menu-toggle rounded" href="#"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
<nav id="sidebar-wrapper">
<ul class="sidebar-nav">
        <li class="sidebar-brand"><a>Gestão de Consultas</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Inicio</a></li>
        <li class="sidebar-nav-item"><a href="logout.php">Logout</a></li>
    </ul>
</nav>
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
                        <th>Ações</th>
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
                            echo "<td>".$dados['status_c']."</td>";
                            echo "<td>".$dados['observacao']."</td>";
                            echo "<td>
                                <a class='btn btn-info' href='recepcionista_aceitar.php?id=".$dados['idSolicitacao']."'>Aprovar</a>
                                <a class='btn btn-danger' href='#' onclick='negateRequest(".$dados['idSolicitacao'].")'>Negar</a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/scripts.js"></script>
</body>
</html>
