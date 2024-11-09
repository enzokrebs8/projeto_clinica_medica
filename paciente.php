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
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<a class="menu-toggle rounded" href="#"><i class="fa-solid fa-bars" style="color: #ffffff;"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a>Área do Paciente</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Inicio</a></li>
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
                    <form action="processa_cadastro.php" method="POST">
                        <div class="form-floating mb-3 ">
                            <input class="form-control" id="inputBirthDate" type="datetime-local" placeholder="" />
                            <label for="Datanascimento">Data e horário</label>
                        </div>
                        <select id="medico" class="form-select mb-3" name="medico" aria-label="Medico" required>
                            <option value="" disabled selected>Médico</option>
                            <option value="masculino">Menezes</option>
                            <option value="feminino">Ramos</option>
                        </select>
                        <select id="especialidade" class="form-select mb-3" name="especialidade" aria-label="Especialidade" required>
                            <option value="" disabled selected>Especialidade</option>
                            <option value="masculino">1</option>
                            <option value="feminino">2</option>
                            <option value="feminino">3</option>
                        </select>
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
