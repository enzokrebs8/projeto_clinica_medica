<?php
    session_start();
    if((!isset($_SESSION['id']) == true) and (!isset($_SESSION['nome']) == true) and (!isset($_SESSION['email']) == true)){
        unset($_SESSION['id']);
        unset($_SESSION['nome']);
        unset($_SESSION['email']);
        header('Location: index.html');
    }


    include 'conecta.php';
    include 'menu.php';
?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success" href="insere_medico.php">INSERIR NOVO MÉDICO</a>
                            </li>
                        </ol>       
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success" href="insere_recepcionista.php">INSERIR NOVO RECEPCIONISTA</a>
                            </li>
                        </ol> 
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success" href="insere_paciente_maior.php">INSERIR NOVO PACIENTE MAIOR</a>
                            </li>
                        </ol> 
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">
                                <a class="btn btn-success" href="insere_paciente_menor.php">INSERIR NOVO PACIENTE MENOR</a>
                            </li>
                        </ol>                  
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
                                            <th>ESPECIALIDADE</th>
                                            <th>NASCIMENTO</th>
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
                                                <a class='btn btn-danger' href='processa_delete_cliente.php?id=".$dados['IDMedico']."'>APAGAR</a>
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
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDRecepcionista']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_cliente.php?id=".$dados['IDRecepcionista']."'>APAGAR</a>
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
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDPacienteMaior']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_cliente.php?id=".$dados['IDPacienteMaior']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                    </tbody>
                                </table>
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
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDPacienteMenor']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_cliente.php?id=".$dados['IDPacienteMenor']."'>APAGAR</a>
                                            </td>";
                                            echo "</tr>";
                                        }
                                    ?>
                                        
                                        
                                    </tbody>
                                </table>
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
                                                <a class='btn btn-info' href='atualiza_medico.php?id=".$dados['IDResponsavel']."'>ATUALIZAR</a>                             
                                                <a class='btn btn-danger' href='processa_delete_cliente.php?id=".$dados['IDResponsavel']."'>APAGAR</a>
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
                            <div class="text-muted">Copyright &copy; Clínica SOS</div>
                            <div>
                                <a href="#">Política de Privacidade</a>
                                &middot;
                                <a href="#">Termos &amp; Condições</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/js_adm/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/js_adm/datatables-simple-demo.js"></script>
    </body>
</html>
