<?php
    include 'conecta.php';

    $id = $_GET['id'];

    $sql = "SELECT * FROM responsavel WHERE IDResponsavel = '$id'";
    $consulta = $conexao->query($sql);
    $dados = $consulta->fetch_assoc();

    session_start();
    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'devs') {
        header('Location: login.html');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <title>ATUALIZAR INFORMAÇÕES</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <div id="layoutSidenav">
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">ATUALIZAR RESPONSAVEL</h1>                                                                       
                        <div class="card mb-4">
                            <form action="processa_atualiza_responsavel.php?id=<?php echo $id; ?>" method="POST">
                                <div class="mb-3">
                                    <label class="form-label">Nome</label>
                                    <input name="nome_novo" type="text" class="form-control" value="<?php echo $dados['nome']; ?>">                                    
                                </div>
                                <div class="row mb-3">
                                    <div>
                                        <div class="form-floating mb-3 mb-md-0">
                                            <input class="form-control" name="nascimento_novo" value="<?php echo $dados['nascimento']; ?>" type="date" />
                                            <label for="txtNascimento">Data de nascimento</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">CPF</label>
                                    <input name="CPF_novo" type="text" class="form-control" value="<?php echo $dados['CPF']; ?>">                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">RG</label>
                                    <input name="RG_novo" type="text" class="form-control" value="<?php echo $dados['RG']; ?>">                                    
                                </div>                              
                                <div class="mb-3">
                                    <label class="form-label">Email</label>
                                    <input name="email_novo" type="email" class="form-control" value="<?php echo $dados['email']; ?>">                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Senha</label>
                                    <input name="senha_nova" type="senha" class="form-control" value="<?php echo $dados['senha']; ?>">                                    
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telefone</label>
                                    <input name="telefone_novo" type="text" class="form-control" value="<?php echo $dados['telefoneResp']; ?>">                                    
                                </div> 
                                <div class="mb-3">
                                    <label class="form-label">ID do Endereço</label>
                                    <input name="IDEndereco_novo" type="text" class="form-control" value="<?php echo $dados['IDEndereco']; ?>">                                    
                                </div> 
                                <div class="mb-3">
                                    <label class="form-label">ID do Paciente Menor</label>
                                    <input name="IDPacienteMenor_novo" type="text" class="form-control" value="<?php echo $dados['IDPacienteMenor']; ?>">                                    
                                </div>
                                <input type="hidden" name='id' value="<?php echo $id?>">                                   
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
