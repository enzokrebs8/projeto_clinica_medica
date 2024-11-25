<?php
    include 'conecta.php';
    include 'menu.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM pacientemenor WHERE IDPacienteMenor = '$id'";
    $consulta = $conexao->query($sql);
    $dados = $consulta->fetch_assoc();    

    session_start();
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'devs') {
        header('Location: login.html');
        exit();
    }

?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ATUALIZAR PLANO DE SAÚDE</h1>                                                                       
                        <div class="card mb-4">
                            <form action="processa_atualiza_plano_saude.php?id=<?php echo $id; ?>" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nome do Plano</label>
                                    <input name="nome_novo" type="text" class="form-control" value="<?php echo $dados['NomePlano']; ?>">                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Contato com a Central do Plano</label>
                                    <input name="contato_novo" type="text" class="form-control" value="<?php echo $dados['ContatoCentralPlano']; ?>">                                    
                                </div>                             
                                <button type="submit" class="btn btn-primary">ATUALIZAR</button>
                            </form>
                        </div>
                    </div>
                </main>
                <footer class="footer text-center p-3 mt-4">
                    <p class="text-muted small mb-0">Copyright &copy; SOS - Sistema Organizado de Saúde 2024</p>
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
