<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "INGJADE";
$password = "JADE2023.";
$dbname = "TecnoCell";

// Datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];

// Crear conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error al conectar a la base de datos: " . $conn->connect_error);
}

// Consulta para insertar los datos en la tabla
$sql = "INSERT INTO usuarios (nombre, apellido, correo, contrasena) VALUES ('$nombre', '$apellido', '$correo', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    // Guardar información del usuario en la sesión
    session_start();
    $_SESSION['nombre'] = $nombre;
    $_SESSION['apellido'] = $apellido;
    $_SESSION['correo'] = $correo;
    /*------------------------------------------------------------------------------*/
    echo "Datos guardados correctamente";
    echo '<script>alert("Datos guardados correctamente");</script>';
    header("Location: interface.php");
} else {
    echo "Error al guardar los datos: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
