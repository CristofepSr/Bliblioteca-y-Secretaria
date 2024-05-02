<?php
include "../config/database.php";

// Iniciar sesión
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Consulta para verificar si el usuario ya existe
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Usuario encontrado, iniciar sesión y redirigir
        $_SESSION['username'] = $username;
        header("Location: /public/index.php");
        exit;
    } else {
        // Usuario no encontrado, mostrar mensaje de error
        echo "Usuario o contraseña incorrectos";
    }
}
?>
