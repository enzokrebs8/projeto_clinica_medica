<?php
    session_start();
    include('conecta.php');

    if (!isset($_SESSION['tipo']) || $_SESSION['tipo'] != 'devs') {
        header('Location: login.html');
        exit();
    }


?>

<!DOCTYPE html>
<html lang="pt-br">
    <head class="">
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Painel do Desenvolvedor</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/style_adm.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <nav class="navbar sticky-top sb-topnav navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand ps-3" href="index.php">Painel do Desenvolvedor</a>
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li>
                            <a>Logado como <?php echo $_SESSION['nome']; ?></a>
                        </li>
                        <li>
                            <a class="btn btn-danger" href="loguot.php">Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
                <main class="aiai">
                    <div class="container-fluid px-4">
                        <center><h1>Gerenciar Tabelas</h1></center>
                        <center>
                            <div class="mb-4 row">
                                <div class=" col-sm">
                                    <a class="btn btn-success" href="cadastro_medico.php">INSERIR NOVO MÉDICO</a>
                                </div>
                                <div class=" col-sm">
                                    <a class="btn btn-success" href="cadastro_recepcionista.php">INSERIR NOVO RECEPCIONISTA</a>
                                </div>
                                <div class="col-sm">
                                    <a class="btn btn-success" href="insere_plano_saúde.php">INSERIR NOVO PLANO DE SAÚDE</a>
                                </div>
                            </div>
                        </center>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Planos de Saúde
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME DO PLANO</th>
                                            <th>CONTATO</th>
                                            <th>AÇÕES</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM planosaude";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDPlanoSaude']."</td>";
                                            echo "<td>".$dados['NomePlano']."</td>";
                                            echo "<td>".$dados['ContatoCentralPlano']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDPlanoSaude']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_medico.php?id=".$dados['IDPlanoSaude']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>               
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Médicos
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>CPF</th>
                                            <th>RG</th>
                                            <th>EMAIL</th>
                                            <th>NASCIMENTO</th>
                                            <th>ESPECIALIDADE</th>
                                            <th>CRM</th>
                                            <th>TELEFONE</th>
                                            <th>AÇÕES</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM medicos";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDMedico']."</td>";
                                            echo "<td>".$dados['nome']."</td>";
                                            echo "<td>".$dados['CPF']."</td>";
                                            echo "<td>".$dados['RG']."</td>";
                                            echo "<td>".$dados['email']."</td>";
                                            echo "<td>".$dados['nascimento']."</td>";
                                            echo "<td>".$dados['Especialidade']."</td>";
                                            echo "<td>".$dados['CRM']."</td>";
                                            echo "<td>".$dados['telefone']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDMedico']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_medico.php?id=".$dados['IDMedico']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Recepcionistas
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>E-MAIL</th>
                                            <th>CPF</th>
                                            <th>RG</th>  
                                            <th>NASCIMENTO</th> 
                                            <th>TELEFONE</th>
                                            <th>AÇÕES</th>                             
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM recepcionistas";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDRecepcionista']."</td>";
                                            echo "<td>".$dados['nome']."</td>";
                                            echo "<td>".$dados['email']."</td>";
                                            echo "<td>".$dados['CPF']."</td>";
                                            echo "<td>".$dados['RG']."</td>";
                                            echo "<td>".$dados['nascimento']."</td>";
                                            echo "<td>".$dados['telefone']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_recepcionista.php?id=".$dados['IDRecepcionista']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_recepcionista.php?id=".$dados['IDRecepcionista']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pacientes Maiores
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>ID PLANO DE SAUDE</th>
                                            <th>ID ENDEREÇO</th>
                                            <th>E-MAIL</th>
                                            <th>TELEFONE EMERGÊNCIA</th>
                                            <th>TELEFONE</th>
                                            <th>CPF</th>
                                            <th>RG</th>   
                                            <th>GÊNERO</th> 
                                            <th>NASCIMENTO</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM pacientemaior";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDPacienteMaior']."</td>";
                                            echo "<td>".$dados['nome']."</td>";
                                            echo "<td>".$dados['IDPlanoSaude']."</td>";
                                            echo "<td>".$dados['IDEndereco']."</td>";
                                            echo "<td>".$dados['email']."</td>";
                                            echo "<td>".$dados['telefoneEmergencia']."</td>";
                                            echo "<td>".$dados['telefone']."</td>";
                                            echo "<td>".$dados['CPF']."</td>";
                                            echo "<td>".$dados['RG']."</td>";
                                            echo "<td>".$dados['genero']."</td>";
                                            echo "<td>".$dados['nascimento']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_paciente_maior.php?id=".$dados['IDPacienteMaior']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_paciente_maior.php?id=".$dados['IDPacienteMaior']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Pacientes Menores
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>E-MAIL</th>
                                            <th>TELEFONE</th>
                                            <th>TELEFONE DE EMERGÊNCIA</th>  
                                            <th>CPF</th>   
                                            <th>RG</th>  
                                            <th>GÊNERO</th>     
                                            <th>ID RESPONSAVEL</th>  
                                            <th>ID ENDEREÇO</th>  
                                            <th>ID PLANO DE SAUDE</th> 
                                            <th>NASCIMENTO</th>   
                                            <th>RELAÇÃO DO RESPONSÁVEL</th>
                                            <th>AÇÕES</th>                               
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM pacientemenor";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDPacienteMenor']."</td>";
                                            echo "<td>".$dados['nome']."</td>";
                                            echo "<td>".$dados['email']."</td>";
                                            echo "<td>".$dados['telefone']."</td>";
                                            echo "<td>".$dados['telefoneEmergencia']."</td>";
                                            echo "<td>".$dados['CPF']."</td>";
                                            echo "<td>".$dados['RG']."</td>";
                                            echo "<td>".$dados['genero']."</td>";
                                            echo "<td>".$dados['IDResponsavel']."</td>";
                                            echo "<td>".$dados['IDEndereco']."</td>";
                                            echo "<td>".$dados['IDPlanoSaude']."</td>";
                                            echo "<td>".$dados['nascimento']."</td>";
                                            echo "<td>".$dados['relacaoResponsavel']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_paciente_menor?id=".$dados['IDPacienteMenor']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_paciente_menor.php?id=".$dados['IDPacienteMenor']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>        
                                            
                                    </tbody>
                                </table>
                            </div>
                        </div>   
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Responsável
                            </div>
                                <div class="card-body">
                                <table id="datatablesSimple" class="datatable-table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NOME</th>
                                            <th>E-MAIL</th>
                                            <th>TELEFONE</th>
                                            <th>RG</th>
                                            <th>CPF</th> 
                                            <th>NASCIMENTO</th>
                                            <th>ID ENDEREÇO</th>
                                            <th>ID PACIENTE</th>
                                            <th>AÇÕES</th>                                 
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $sql = "SELECT * FROM responsavel";
                                        $consulta = $conexao->query($sql);
                                        while($dados = $consulta->fetch_assoc()){
                                            echo "<tr>";
                                            echo "<td>".$dados['IDResponsavel']."</td>";
                                            echo "<td>".$dados['nome']."</td>";
                                            echo "<td>".$dados['email']."</td>";
                                            echo "<td>".$dados['telefoneResp']."</td>";
                                            echo "<td>".$dados['RG']."</td>";
                                            echo "<td>".$dados['CPF']."</td>";
                                            echo "<td>".$dados['nascimento']."</td>";
                                            echo "<td>".$dados['IDEndereco']."</td>";
                                            echo "<td>".$dados['IDPacienteMenor']."</td>";
                                            echo "<td>
                                                <a class='btn btn-info' href='atualiza_responsavel.php?id=".$dados['IDResponsavel']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_responsavel.php?id=".$dados['IDResponsavel']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SOS - Sistema Organizado de Saúde 2024</div>
                        </div>
                    </div>
                </footer>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="assets/demo/chart-area-demo.js"></script>
    <script src="assets/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</html>

        