<?php
$host = "localhost";
$user = "root";
$pass = "";
$name_db = "susten";

$conn = new mysqli($host, $user, $pass, $name_db);

if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

$searchTerm = $_GET['query'];

$sql = "SELECT * FROM produtos WHERE nome LIKE '%$searchTerm%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<li>" . $row['nome'] . "</li>";
    }
} else {
    echo "<li>Nenhum resultado encontrado</li>";
}

$conn->close();
?>
