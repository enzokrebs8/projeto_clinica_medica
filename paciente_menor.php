<?php

session_start();
include('conecta.php');

if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'pacientemenor') {
    header('Location: login.html');
    exit();
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<a class="menu-toggle rounded" href="#"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
<nav id="sidebar-wrapper">
<ul class="sidebar-nav">
        <li class="sidebar-brand"><a>Área do Paciente</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Inicio</a></li>
        <li class="sidebar-nav-item"><a href="paciente_maior.php">Tela de Consultas</a></li>
        <li class="sidebar-nav-item"><a href="logout.php">Logout</a></li>
    </ul>
</nav>

<header class="subirusdoistiuzin">
    <h1>Área do Paciente</h1>
</header>

<body class="soninho">
    <div class="container cirilo">
        <div class="container text-center tumbalatumba">
            <div class="row">
            <h2 class="calcaangelical">Consultas agendadas</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID da Consulta</th>
                                    <th>Data/Hora</th>
                                    <th>Especialidade</th>
                                    <th>Nome do Paciente</th>
                                    <th>Nome do Médico</th>
                                    <th>Status</th>
                                    <th>Observações</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                    $cpfLogado = $_SESSION['cpf'];
                                    $query = "SELECT * FROM consultaspacientemenor WHERE cpf_p = ?";
                                    $stmt = $conexao->prepare($query);
                                    
                                    if ($stmt === false) {
                                        die("Erro na preparação da consulta: " . $conexao->error);
                                    }

                                    $stmt->bind_param('s', $cpfLogado);
                                    $stmt->execute();
                                    $resultado = $stmt->get_result();

                                    if ($resultado->num_rows === 0) {
                                        echo "<tr><td colspan='7'>Nenhuma consulta encontrada.</td></tr>";
                                    } else {
                                        while ($dados = $resultado->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$dados['IDConsultasP']."</td>";
                                            echo "<td>".$dados['data_hora']."</td>";
                                            echo "<td>".$dados['especialidade']."</td>";
                                            echo "<td>".$dados['nome_paciente']."</td>";
                                            echo "<td>".$dados['medico']."</td>";
                                            echo "<td>".$dados['status_c']."</td>";
                                            echo "<td>".$dados['observacao']."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container cirilo">
        <div class="container text-center tumbalatumba">
            <div class="row">
                    <h2 class="calcaangelical">Consultas Solicitadas</h2>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID da Consulta</th>
                                    <th>Data/Hora</th>
                                    <th>Especialidade</th>
                                    <th>Nome do Paciente</th>
                                    <th>Nome do Médico</th>
                                    <th>Status</th>
                                    <th>Observações</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $cpfLogado = $_SESSION['cpf'];
                                    $query = "SELECT * FROM solicitarconsulta WHERE cpf_p = ?";
                                    $stmt = $conexao->prepare($query);
                                    
                                    if ($stmt === false) {
                                        die("Erro na preparação da consulta: " . $conexao->error);
                                    }

                                    $stmt->bind_param('s', $cpfLogado);
                                    $stmt->execute();
                                    $resultado = $stmt->get_result();

                                    if ($resultado->num_rows === 0) {
                                        echo "<tr><td colspan='7'>Nenhuma consulta encontrada.</td></tr>";
                                    } else {
                                        while ($dados = $resultado->fetch_assoc()) {
                                            echo "<tr>";
                                            echo "<td>".$dados['idSolicitacao']."</td>";
                                            echo "<td>".$dados['data_hora']."</td>";
                                            echo "<td>".$dados['especialidade']."</td>";
                                            echo "<td>".$dados['nome_paciente']."</td>";
                                            echo "<td>".$dados['medico']."</td>";
                                            echo "<td>".$dados['status_c']."</td>";
                                            echo "<td>".$dados['observacao']."</td>";
                                            echo "</tr>";
                                        }
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                        <a href="solicitar_consultas.php" class="sos">Solicitar Consulta</a>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer text-center">
        <p class="text-muted small mb-0">Copyright &copy; Davizin e Iago 2024</p>
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
