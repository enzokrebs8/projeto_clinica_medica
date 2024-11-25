<?php

include 'conecta.php';

session_start();
if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'devs') {
    header('Location: login.html');
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registrar DEV - SOS</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        .hidden {
            display: none;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Cadastrar Dev</h3></div>
                                <div class="card-body">
                                    <form action="processa_cadastro_dev.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nome" type="text" placeholder="" required/>
                                            <label for="txtNome">Nome completo</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id='txtCpf' name="CPF" type="text" placeholder="" required/>
                                            <label for="CPF">CPF</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id='txtEmail' name="email" type="text" placeholder="" required/>
                                            <label for="txtEmail">Endereço de Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id='txtSenha' name="senha" type="password" placeholder="" required/>
                                                    <label for="txtSenha">Senha</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Cadastrar</button</div>
                                        </div>
                                    </form>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php">Voltar ao menu do Dev</a></div>
                                        <div href="logout.php" class="small"><a href="index.html">Deslogar e voltar ao início</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <footer style="background-color: white;" class="footer text-center p-3 mt-4">
        <p class="text-muted small mb-0">Copyright &copy; SOS - Sistema Organizado de Saúde 2024</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>
</html>