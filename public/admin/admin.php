<?php

include('../../src/config/database.php');
// Consulta para obtener mensajes
$sql_mensajes = "SELECT nombre, telefono, mensaje, fecha_envio FROM mensajes";
$result_mensajes = $conn->query($sql_mensajes);

// Consulta para obtener usuarios
$sql_usuarios = "SELECT id, username, email, solicitado_en FROM user";
$result_usuarios = $conn->query($sql_usuarios);

// Consulta para obtener libros alquilados
$sql_libros = "SELECT fullname, email, course, book, solicitado_en FROM alquilar";
$result_libros = $conn->query($sql_libros);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de administracion</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/admin/admin.css">
    <link rel="stylesheet" href="../../assets/css/admin/navbar.css">
    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>
<body>

<header>
        <h1>Panel de Administración</h1>
        <nav class="nav">
            <ul class="nav_list">
                <li><a href="./admin.php">Inicio</a></li>
                <li><a href="./messages.php">Mensajes</a></li>
                <li><a href="./registered_users.php">Usuarios</a></li>
                <li><a href="./rented_books.php">Libros Alquilados</a></li>
                <li><a href="../index.php">Salir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section>
            <h2>Bienvenido al Panel de Administración</h2>
            <p>Desde aquí puedes gestionar diferentes aspectos de la plataforma.</p>
        </section>
        <section>
            <h2>Últimos Mensajes</h2>
            <ul>
                <?php
                if ($result_mensajes->num_rows > 0) {
                    while($row = $result_mensajes->fetch_assoc()) {
                        echo "<li>{$row['fecha_envio']}: {$row['nombre']} ({$row['telefono']}) - {$row['mensaje']}</li>";
                    }
                } else {
                    echo "<li>No hay mensajes nuevos.</li>";
                }
                ?>
            </ul>
            <a href="./messages.php">Ver todos los mensajes</a>
        </section>
        <section>
            <h2>Últimos Usuarios Registrados</h2>
            <ul>
                <?php
                if ($result_usuarios->num_rows > 0) {
                    while($row = $result_usuarios->fetch_assoc()) {
                        echo "<li>{$row['solicitado_en']}: {$row['username']} ({$row['email']})</li>";
                    }
                } else {
                    echo "<li>No hay usuarios nuevos.</li>";
                }
                ?>
            </ul>
            <a href="./registered_users.php">Ver todos los usuarios</a>
        </section>
        <section>
            <h2>Últimos Libros Alquilados</h2>
            <ul>
                <?php
                if ($result_libros->num_rows > 0) {
                    while($row = $result_libros->fetch_assoc()) {
                        echo "<li>{$row['solicitado_en']}: {$row['fullname']} ({$row['email']}) - Curso: {$row['course']} - Libro: {$row['book']}</li>";
                    }
                } else {
                    echo "<li>No hay libros alquilados recientemente.</li>";
                }
                ?>
            </ul>
            <a href="./rented_books.php">Ver todos los libros alquilados</a>
        </section>
    </main>
</body>
</html>

<?php
$conn->close();
?>
