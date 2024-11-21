<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calendario";

// Conectar ao banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verificar o tipo de requisição
$method = $_SERVER['REQUEST_METHOD'];

if ($method === 'GET') {
    // Buscar todos os eventos
    $sql = "SELECT * FROM events";
    $result = $conn->query($sql);
    $events = [];
    while ($row = $result->fetch_assoc()) {
        $events[] = $row;
    }
    echo json_encode($events);

} elseif ($method === 'POST') {
    // Adicionar um novo evento
    $data = json_decode(file_get_contents("php://input"), true);
    $day = $data['day'];
    $month = $data['month'];
    $year = $data['year'];
    $title = $data['title'];
    $time = $data['time'];

    $sql = "INSERT INTO events (day, month, year, title, time) VALUES ('$day', '$month', '$year', '$title', '$time')";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Evento adicionado com sucesso!"]);
    } else {
        echo json_encode(["error" => "Erro ao adicionar evento: " . $conn->error]);
    }

} elseif ($method === 'DELETE') {
    // Excluir um evento por título e dia
    $day = $_GET['id'];
    $title = $_GET['title'];
    $sql = "DELETE FROM events WHERE day = $day AND title = '$title'";
    if ($conn->query($sql) === TRUE) {
        echo json_encode(["message" => "Evento excluído com sucesso!"]);
    } else {
        echo json_encode(["error" => "Erro ao excluir evento: " . $conn->error]);
    }
}


$conn->close();
?>
