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
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Criar conta</h3></div>
                                <div class="card-body">
                                    <form action="processa_cadastro.php" method="POST">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="nome" type="text" placeholder="" required/>
                                            <label for="txtNome">Nome completo</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="nascimento" id="txtNascimento" type="date" placeholder="" required />
                                                    <label for="txtNascimento">Data de nascimento</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select id="genero" class="form-select" name="genero" aria-label="Gênero" required>
                                                        <option value="" disabled selected>Selecione seu gênero biológico</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                    </select>
                                                    <label for="txtGenero">Gênero</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtTelefone" name="telefone" type="tel" placeholder="" required/>
                                            <label for="txtTelefone">Número de Telefone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="txtTelefoneEmergencia" name="telefoneEmergencia" type="tel" placeholder="" required/>
                                            <label for="txtTelefoneEmergencia">Número de Telefone de emergência</label>
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
                                            <select id="NomePlano" class="form-select" name="NomePlano" aria-label="Plano de Saúde" required>
                                                <option value="" disabled selected>Selecione seu Plano de Saúde</option>
                                                <?php
                                                    $query = "SELECT NomePlano FROM planosaude";
                                                    $result = $conexao->query($query);

                                                    while ($row = $result->fetch_assoc()) {
                                                        echo '<option value="' . htmlspecialchars($row['NomePlano']) . '">' . htmlspecialchars($row['NomePlano']) . '</option>';
                                                    }
                                                ?>
                                            </select>
                                            <label for="txtNomePlano">Plano de Saúde</label>
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

                                        <h3 class="vaiviverDavi">Endereço</h3>
                                        <div class="form-floating mb-3">
                                            <input id='txtCep' class="form-control" name="cep" type="text" placeholder="" required/>
                                            <label for="txtCep">CEP</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input id='txtRua' class="form-control" name="rua" type="text" placeholder="" required/>
                                                    <label for="txtRua">Rua</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input id='txtNumero' class="form-control" name="numero" type="text" placeholder="" required/>
                                                    <label for="txtNumero">Número da Casa</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='txtBairro' class="form-control" name="bairro" type="text" placeholder="" required/>
                                            <label for="txtBairro">Bairro</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='txtComplemento' class="form-control" name="complemento" type="text" placeholder="" required/>
                                            <label for="txtComplemento">Complemento</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='txtCidade' class="form-control" name="cidade" type="text" placeholder="" required/>
                                            <label for="txtCidade">Cidade</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='txtEstado' class="form-control" name="estado" type="text" placeholder="" required/>
                                            <label for="txtEstado">Estado</label>
                                        </div>

                                        <div class="col-md-12 additional-fields hidden" id="additionalFields">
                                            <h3 class="vaiviverDavi">Campo do Responsável</h3>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nome_responsavel" type="text" placeholder="" required/>
                                                <label for="nome_responsavel">Nome do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="cpf_responsavel" type="text" placeholder="" required/>
                                                <label for="cpf_responsavel">CPF do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="rg_responsavel" type="text" placeholder="" required/>
                                                <label for="rg_responsavel">RG do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="nascimento_responsavel" type="date" placeholder="" required/>
                                                <label for="nascimento_responsavel">Data de nascimento do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="telefoneResp" type="text" placeholder="" required/>
                                                <label for="telefoneResp">Número de Telefone do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="email_responsavel" type="email" placeholder="" required/>
                                                <label for="email_responsavel">Email do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="relacaoResponsavel" type="text" placeholder="" required/>
                                                <label for="relacaoResponsavel">Relação do responsável com o menor (ex: Pai, Mãe, etc)</label>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Criar conta</button ```php
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="login.html">Já tem uma conta? Vá para o login</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/checkAge.js"></script>
    <script src="js/cep.js"></script>
</body>
</html>