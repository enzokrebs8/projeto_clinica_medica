<?php
    include 'conecta.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo SELECT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>EXEMPLO DE CONSULTA SELECT COM PHP</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">TELEFONE</th>
    </tr>
  </thead>
  <tbody>
  <?php
        $sql = "SELECT * FROM clientes";
        $consulta = $conexao->query($sql);        
        while($dados = $consulta->fetch_assoc()){
            echo "<tr>";
            echo "<td>". $dados['id_cliente']."</td>";
            echo "<td>". $dados['nome_cliente']."</td>";
            echo "<td>". $dados['email_cliente']."</td>";
            echo "<td>". $dados['telefone']."</td>";
            echo "</tr>";
        }
    ?> 
</tbody>
</table>
</body>
</html>