<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $name = $_POST["name"];
    $course = $_POST["course"];
    $message = $_POST["message"];

    $sql = "INSERT INTO contact_us (nombre, course, message) VALUES ('$name', '$course', '$message') ";

    if (mysqli_query($conn, $sql)){
        // Redireccionar a contact.php en src/Views/
        header("Location: /public/Bibliocemas/contact us.html");
        exit; // Asegúrate de salir del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
