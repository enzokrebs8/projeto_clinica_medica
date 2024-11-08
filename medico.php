<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: ../index.html');
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Atendente</title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>

<!-- Menu Toggle Responsivo -->
<a class="menu-toggle rounded" href="#"><i class="fas fa-bars"></i></a>
<nav id="sidebar-wrapper">
    <ul class="sidebar-nav">
        <li class="sidebar-brand"><a href="#">Área do Atendente</a></li>
        <li class="sidebar-nav-item"><a href="index.html">Voltar ao Início</a></li>
    </ul>
</nav>

<!-- Cabeçalho Responsivo -->
<header class="subirusdoistiuzin text-center p-3">
    <h1>Área do Atendente</h1>
</header>

<!-- Conteúdo Principal -->
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 col-lg-8">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nome</th>
                            <th scope="col">Sobrenome</th>
                            <th scope="col">CPF</th>
                            <th scope="col">Telefone</th>
                            <th scope="col">Nascimento</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Dada</td>
                            <td>Otto</td>
                            <td>123.456.789-00</td>
                            <td>(11) 98765-4321</td>
                            <td>01/01/1990</td>
                            <td>@mdo</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>987.654.321-00</td>
                            <td>(22) 87654-3210</td>
                            <td>02/02/1992</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Larry</td>
                            <td>Bird</td>
                            <td>159.753.486-20</td>
                            <td>(33) 76543-2109</td>
                            <td>03/03/1993</td>
                            <td>@twitter</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Rodapé Responsivo -->
<footer class="footer text-center p-3 mt-4">
    <p class="text-muted small mb-0">Copyright &copy; Davizin e Iago 2024</p>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>
