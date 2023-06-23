<?php
// Configuración de la conexión a la base de datos
$servername = "localhost";  // Nombre del servidor de la base de datos
$username = "root";   // Nombre de usuario de la base de datos
$password = ""; // Contraseña de la base de datos
$dbname = "prueba"; // Nombre de la base de datos

// Crear una conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión fue exitosa
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];  // Suponiendo que tienes un campo de formulario con el nombre 'nombre'
$email = $_POST['email'];    // Suponiendo que tienes un campo de formulario con el nombre 'email'

// Preparar la consulta SQL para insertar los datos
$sql = "INSERT INTO usuarios VALUES (NULL, '$nombre', '$email')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Registro exitoso";    
    header("Location: index.html");

} else {
    echo "Error al registrar: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
