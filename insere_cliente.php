<?php
    include 'conecta.php';

    include 'menu.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">INSERIR NOVO CLIENTE</h1>
                                               
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
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
