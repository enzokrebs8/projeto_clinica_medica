<?php
    include 'conecta.php'
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<a class="menu-toggle rounded" href="#"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a>Área do Paciente</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Inicio</a></li>
        <li class="sidebar-nav-item"><a href="solicitar_consultas.php">Tela de Solicitação de Consultas</a></li>
        <li class="sidebar-nav-item"><a href="paciente_maior.php">Tela de Consultas</a></li>
    </ul>
</nav>

<header class="subirusdoistiuzin">
    <h1>Área do Paciente</h1>
</header>

<body class="soninho">
    <div class="container cirilo">
        <div class="container text-center tumbalatumba">
            <div class="row">

                <div class="zuzuimperador">
                    <h2 class="calcaangelical">Agendar consulta</h2>
                    <form action="processa_solicitar_consulta.php" method="POST">
                        <div class="form-floating mb-3">
                            <input class="form-control" name="nome_paciente" type="text" placeholder="" required/>
                            <label for="txtNome">Nome completo do Paciente</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="cpf_p" type="text" placeholder="" required/>
                            <label for="txtCPF">CPF completo do Paciente</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="data_hora" id="txtNascimento" type="datetime-local" placeholder="" required />
                            <label for="txtDataHora">Data e Hora da Consulta</label>
                        </div>
                        <select id="medico" class="form-select mb-3" name="medico" aria-label="Medico" required>
                            <option value="" selected>Selecione por qual médico você deseja ser atendido </option>
                            <?php
                                $query = "SELECT nome FROM medicos";
                                $result = $conexao->query($query);

                                while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . htmlspecialchars($row['nome']) . '">' . htmlspecialchars($row['nome']) . '</option>';
                                }
                            ?>
                        </select>

                        <select id="especialidade" class="form-select mb-3" name="especialidade" aria-label="Especialidade" required>
                            <option value="" selected>Selecione qual tipo de especialidade que necessita de atendimento </option>n>
                            <?php
                                $query = "SELECT Especialidade FROM medicos";
                                $result = $conexao->query($query);

                                while ($row = $result->fetch_assoc()) {
                                echo '<option value="' . htmlspecialchars($row['Especialidade']) . '">' . htmlspecialchars($row['Especialidade']) . '</option>';
                                }
                            ?>
                        </select>
                        <div class="form-floating mb-3">
                            <input class="form-control" name="observacao" type="text" placeholder=""/>
                            <label for="txtObserv">Observação</label>
                        </div>

                        <input class="btn btn-primary orangotango" type="submit" value="Solicitar consulta">
                    </form>
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
