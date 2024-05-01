<?php
include "../config/database.php";

if ($_SERVER["REQUEST_METHOD"]== "POST"){
    $fullname = $_POST["fullname"];
    $email = $_POST["emal"];
    $course = $_POST["course"];
    $book = $_POST["book"];

    $sql = "INSERT INTO alquilar (fullname, email, course, book) VALUES ('$fullname', '$email', '$course', '$book') ";

    if (mysqli_query($conn, $sql)){
        // Redireccionar a contact.php en src/Views/
        header("Location: /public/Bibliocemas/Libros/alquilar.html");
        exit; // Asegúrate de salir del script después de la redirección
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
