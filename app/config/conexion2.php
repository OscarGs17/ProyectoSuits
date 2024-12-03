<?php
$servername = "localhost";  
$username = "root";         
$password = "";             
$database = "mi_sitio_web."; 

// Crear la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
