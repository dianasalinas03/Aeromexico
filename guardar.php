<?php
include("abre.php");

// Get form data
$cliente = $_POST['cliente'];
$boleto = $_POST['boleto'];
$destino = $_POST['destino'];

// Prepare SQL statement
$consulta = $conexion->prepare("INSERT INTO boletos (cliente, boleto, destino) VALUES (?, ?, ?)");
$consulta->bind_param("sss", $cliente, $boleto, $destino);

// Execute the query
if ($consulta->execute()) {
    header("Location: index.php");
    exit();
} else {
    echo "Error: " . $consulta->error;
}

// Close connection
$consulta->close();
$conexion->close();
?>