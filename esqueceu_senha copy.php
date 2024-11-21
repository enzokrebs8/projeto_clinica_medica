<?php>
    include ('conecta.php');

    if(isset($_POST[ok])){

        $email = $mysqli->escape_string($_POST['email']);

        if(!filter_var($email, FILTER_VALIDADE_EMAIL)){
            $erro[] = "E-mail inválido.";
        }

        $tabelas = [
            'pacientemaior',
            'pacientemenor',
            'medicos',
            'devs',
            'recepcionistas'
        ];
    
        foreach ($tabelas as $tabela => $redirect) {
            $query = "SELECT senha FROM $tabela WHERE email = '$email'";
            $resultado = $conexao->query($query);
            $usuario = $resultado->fetch_assoc();
            $total = $resultado->num_rows;
        }


        if(count($erro)) == 0{

            $novasenha = substr(md5(time()), 0, 6);
            $novasenha_cript = password_hash($novasenha, PASSWORD_BCRYPT);
            

            if(mail($email, "Recuperação de Senha - Clínica SOS", "Soubemos que teve problemas ao logar em sua conta e precisou redefinir sua senha, aqui está ela: ".$novasenha)){

                $sql_code = "UPDATE $tabela SET senha = '$novasenha_cript' WHERE email = '$email'";
                $sql_query = $mysqli->query($sql_code) or die($mysqli->error);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Redefinir senha - SOS</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.png" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Recupere sua senha</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="">
                                            <div class="form-floating mb-3">
                                                <input name="email" class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                                <label for="inputEmail">Endereço de Email</label>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <a class="small" href="login.html">Ir para Login</a>
                                                <input class="btn btn-primary" name="ok" type="submit" value="Enviar email de recuperação">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="register.php">Precisa de uma conta? Cadastre-se!</a></div>
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
    </body>
</html>