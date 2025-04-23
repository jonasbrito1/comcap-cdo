<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root"; // Seu usuário MySQL
$password = ""; // Sua senha MySQL
$dbname = "comcap";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>