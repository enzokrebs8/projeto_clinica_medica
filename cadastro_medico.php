<?php

include 'conecta.php';

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Registre-se - SOS</title>
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
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Cadastrar Médico</h3></div>
                                <div class="card-body">
                                    <form action="processa_cadastro_medico.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nome" type="text" placeholder="" required/>
                                            <label for="txtNome">Nome completo</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div>
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="nascimento" id="txtNascimento" type="date" placeholder="" required />
                                                    <label for="txtNascimento">Data de nascimento</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id='txtCpf' name="CPF" type="text" placeholder="" required/>
                                            <label for="CPF">CPF</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="RG" type="text" placeholder="" required/>
                                            <label for="txtRG">RG</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtEspecialidade" name="Especialidade" type="text" placeholder="" required/>
                                            <label for="txtTelefone">Especialidade</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtCRM" name="CRM" type="text" placeholder="" required/>
                                            <label for="txtTelefone">CRM</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtTelefone" name="telefone" type="tel" placeholder="" required/>
                                            <label for="txtTelefone">Número de Telefone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id='txtEmail' name="email" type="text" placeholder="" required/>
                                            <label for="txtEmail">Endereço de Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" id='txtSenha' name="senha" type="password" placeholder="" required/>
                                                    <label for="txtSenha">Senha</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Cadastrar Médico</button</div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/cep.js"></script>
</body>
</html>