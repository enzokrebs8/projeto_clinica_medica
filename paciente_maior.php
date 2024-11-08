<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paciente</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="/assets/img/consulta.png" type="image/x-icon">
</head>

<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
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
    <div class="slk">
        <div class="container cirilo">
            <div class="container text-center tumbalatumba">
                <div class="row">

                    <div class="col-md-5 zuzuimperador">
                        <h2 class="calcaangelical">Agendar consulta</h2>
                        <div class="form-floating mb-3 mb-md-0">
                            <input class="form-control" id="inputBirthDate" type="datetime-local" placeholder="" />
                            <label for="Datanascimento">Data e horário</label>
                        </div>
                        <select id="genero" class="form-select" name="genero" aria-label="Gênero" required>
                            <option value="" disabled selected>Médico</option>
                            <option value="masculino">Menezes</option>
                            <option value="feminino">Ramos</option>
                        </select>
                        <input class="btn btn-primary orangotango" type="submit" value="Solicitar consulta">
                    </div>


                    <div class="col-md-7">
                        <h2 class="calcaangelical">Consultas agendadas</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Data/Hora</th>
                                    <th scope="col">Médico</th>
                                    <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>17/03/2025 - 21:99</td>
                                    <td>Menezes</td>
                                    <td>Aceito</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
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
