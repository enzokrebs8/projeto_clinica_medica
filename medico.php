<?php
//   session_start();
  
  include('conecta.php');
  
//   if (!isset($_SESSION['cpf'])) {
//       header('Location: index.html');
//       exit();
//   }
  
//   $cpfLogado = $_SESSION['cpf'];
  
//   $query = "SELECT CPF FROM medicos WHERE CPF = ?";
//   $stmt = $conexao->prepare($query);
//   $stmt->bind_param('s', $cpfLogado);
//   $stmt->execute();
//   $resultado = $stmt->get_result();
  
//   if ($resultado->num_rows === 0) {
//       session_unset();
//       session_destroy();
//       header('Location: index.html');
//       exit();
//   }

//     // if(($_SESSION['cpf'] !== 
//     //     !isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
//     //     unset($_SESSION['id']);
//     //     unset($_SESSION['nome']);
//     //     unset($_SESSION['email']);
//     //     header('Location: index.html');
//     // }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médico - Consultas marcadas</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Menu Toggle Responsivo -->
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#">Consultas marcadas</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Início</a></li>
    </ul>
</nav>

<!-- Cabeçalho Responsivo -->
<header class="subirusdoistiuzin text-center p-3">
    <h1>Consultas Marcadas com Você</h1>
</header>

<!-- Conteúdo Principal -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Data/Hora</th>
                        <th>Especialidade</th>
                        <th>Nome do Paciente</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql = "SELECT * FROM consultasmedico";
                        $consulta = $conexao->query($sql);
                        while($dados = $consulta->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$dados['data_hora']."</td>";
                            echo "<td>".$dados['especialidade']."</td>";
                            echo "<td>".$dados['nome_paciente']."</td>";
                            echo "<td>".$dados['status']."</td>";
                            echo "</tr>";
                        }
                    ?>
                </tbody>
            </table>
            </div>
        </div>
    </div>
</div>

<!-- Rodapé Responsivo -->
<footer class="footer text-center p-3 mt-4">
    <p class="text-muted small mb-0">Copyright &copy; SOS - Sistema Organizado de Saúde 2024</p>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
