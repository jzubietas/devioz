<?php

require_once '../config/config.php';

// Obtener el usuario y la contraseña enviados desde el formulario
  $usuario = $_POST['usuario'];
  $pw = $_POST['pw'];

// Preparar una sentencia para buscar el usuario y la contraseña en la tabla z_usuarios
$stmt = $conn->prepare("SELECT COUNT(*) AS count FROM z_usuarios WHERE usuario = ? AND pw = ?");
$stmt->bind_param("ss", $usuario, $pw);

// Ejecutar la sentencia
$stmt->execute();

// Obtener el resultado de la sentencia
$result = $stmt->get_result();
$row = $result->fetch_assoc();

// Cerrar la sentencia y la conexión
$stmt->close();
$conn->close();

// Si el usuario y la contraseña son válidos, redirigir al usuario a inicio.php
if ($row['count'] == 1) {
  header('Location: inicio.php');
  exit();
} else {
  // Si el usuario y la contraseña no son válidos, devolver un mensaje de error
  $response = array('success' => false, 'message' => 'Usuario o contraseña incorrectos.');

  // Devolver la respuesta en formato JSON
  header('Content-Type: application/json');
  echo json_encode($response);
}

?>