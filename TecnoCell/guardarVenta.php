<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Conexión a la base de datos (reemplaza con tus credenciales)
    $servername = "localhost";
    $username = "INGJADE";
    $password = "JADE2023.";
    $dbname = "TecnoCell";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Recupera los datos del formulario
    $nombre_cliente = $_POST["nombre_cliente"];
    $email_cliente = $_POST["email_cliente"];
    $direccion_cliente = $_POST["direccion_cliente"];
    $ciudad_cliente = $_POST["ciudad_cliente"];
    $estado_cliente = $_POST["estado_cliente"];
    $codigo_postal_cliente = $_POST["codigo_postal_cliente"];
    $metodo_pago = $_POST["metodo_pago"];
    $productos = $_POST["productos"];
    $total = $_POST["total"];

    // Inserta los datos en la base de datos
    $sql = "INSERT INTO ventas (nombre_cliente, email_cliente, direccion_cliente, ciudad_cliente, estado_cliente, codigo_postal_cliente, metodo_pago, producto, precio)
            VALUES ('$nombre_cliente', '$email_cliente', '$direccion_cliente', '$ciudad_cliente', '$estado_cliente', '$codigo_postal_cliente', '$metodo_pago', '$productos', '$total')";

    if ($conn->query($sql) === TRUE) {
        echo "¡Venta realizada con éxito!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

?>
