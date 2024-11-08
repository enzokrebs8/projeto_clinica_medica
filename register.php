<?php
    include 'conecta.php';
    include 'menu.php';
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Registre-se - SOS</title>
    <link rel="shortcut icon" href="/assets/img/consulta.png" type="image/x-icon">
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
                                            <input class="form-control" name="nome" type="text" placeholder="" />
                                            <label for="nome">Nome completo</label>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="nascimento" id="nascimento" type="date" placeholder="" />
                                                    <label for="nascimento">Data de nascimento</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <select id="genero" class="form-select" name="genero" aria-label="Gênero" required>
                                                        <option value="" disabled selected>Selecione seu gênero biológico</option>
                                                        <option value="masculino">Masculino</option>
                                                        <option value="feminino">Feminino</option>
                                                    </select>
                                                    <label for="genero">Gênero</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="telefone" type="tel" placeholder="" />
                                            <label for="telefone">Telefone</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="telefoneEmergencia" type="tel" placeholder="" />
                                            <label for="telefoneEmergencia">Telefone de emergência</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="CPF" type="text" placeholder="" />
                                            <label for="CPF">CPF</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="RG" type="text" placeholder="" />
                                            <label for="RG">RG</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <select id="NomePlano" class="form-select" name="NomePlano" aria-label="Plano de Saúde" required>
                                                <option value="" disabled selected>Selecione seu Plano de Saúde</option>
                                                <?php
                                                    $sql = "SELECT NomePlano FROM planosaude";
                                                    $consulta = $conexao->query($sql);
                                                    while($dados = $consulta->fetch_assoc()){
                                                        echo "<tr>";
                                                        echo "<option value=''>".$dados['NomePlano']."</option>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </select>
                                            <label for="NomePlano">Plano de Saúde</label>
                                        </div>

                                        <div class="form-floating mb-3">
                                            <input class="form-control" name="email" type="text" placeholder="" />
                                            <label for="email">Endereço de Email</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="senha" type="password" placeholder="" />
                                                    <label for="senha">Senha</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input class="form-control" name="confirmar_senha" type="password" placeholder="" />
                                                    <label for="confirmar_senha">Confirmar senha</label>
                                                </div>
                                            </div>
                                        </div>
                                        <h3 class="vaiviverDavi">Endereço</h3>
                                        <div class="form-floating mb-3">
                                            <input id='cep' class="form-control" name="cep" type="text" placeholder="" />
                                            <label for="cep">CEP</label>
                                        </div>
                                        <div class="row mb-3">
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input id='rua' class="form-control" name="rua" type="text" placeholder="" />
                                                    <label for="rua">Rua</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                    <input id='numero' class="form-control" name="numero" type="text" placeholder="" />
                                                    <label for="numero">Número da Casa</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='bairro' class="form-control" name="bairro" type="text" placeholder="" />
                                            <label for="bairro">Bairro</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='complemento' class="form-control" name="complemento" type="text" placeholder="" />
                                            <label for="complemento">Complemento</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='cidade' class="form-control" name="cidade" type="text" placeholder="" />
                                            <label for="cidade">Cidade</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input id='estado' class="form-control" name="estado" type="text" placeholder="" />
                                            <label for="estado">Estado</label>
                                        </div>
                                        

                                        <div class="col-md-12 additional-fields hidden" id="additionalFields">

                                            <h3 class="vaiviverDavi">Campo do Responsável</h3>
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputGuardian" type="text" placeholder="" />
                                                <label for="inputGuardian">Nome do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputGuardian" type="text" placeholder="" />
                                                <label for="inputGuardian">CPF do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputGuardian" type="text" placeholder="" />
                                                <label for="inputGuardian">RG do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputGuardian" type="date" placeholder="" />
                                                <label for="inputGuardian">Data de nascimento do responsável</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputGuardian" type="email" placeholder="" />
                                                <label for="inputGuardian">Email do responsável</label>
                                            </div>
                                        </div>

                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button class="btn btn-primary btn-block" type="submit">Criar conta</button></div>
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
    <script src="js/scripts.js"></script>
    <script src="js/checkAge.js"></script>
    <script type="text/javascropt" src='js/cep.js'></script>
</body>
</html>
