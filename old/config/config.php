<?php

// Configurar la conexión a la base de datos.
$servername = "localhost";
$username = "u777467137_Devioz";
$password = "Desarrollador_10++";
$dbname = "u777467137_Devioz";

// Establecer la conexión.
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si se estableció la conexión correctamente.
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}



?>
