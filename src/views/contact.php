<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escapar las entradas del formulario para evitar inyecciones de SQL
    $nombre = $conn->real_escape_string($_POST['name']);
    $telefono = $conn->real_escape_string($_POST['tel']);
    $mensaje = $conn->real_escape_string($_POST['message']);

    // Preparar la consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO Mensajes (nombre, telefono, mensaje) VALUES ('$nombre', '$telefono', '$mensaje')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "Mensaje enviado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
