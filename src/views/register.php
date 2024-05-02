<?php
include "../config/database.php";

// Iniciar sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Guardar el nombre de usuario en la sesión
    $_SESSION['username'] = $username;

    $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password') ";

    if (mysqli_query($conn, $sql)) {
        // Redireccionar a contact.php en src/Views/
        header("Location: /public/index.php");
        exit; // Asegúrate de salir del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
