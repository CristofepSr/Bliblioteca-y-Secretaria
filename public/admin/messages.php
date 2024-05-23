<?php
include('../../src/config/database.php');

$sql = "SELECT nombre, course, message, enviado_en FROM contact_us";
$result = $conn->query($sql)
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
    <link rel="stylesheet" href="../../assets/css/admin/table.css">

    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>
<body>
<header>
        <h1>Panel de Administración</h1>
        <nav class="navbar">
            <ul class="navbar__list">
                <li><a href="./admin.php">Inicio</a></li>
                <li><a href="./messages.php" class="selet">Messajes</a></li>
                <li><a href="./registered_users.php">Usuarios</a></li>
                <li><a href="./registered_users.php">rented books</a></li>
                <li><a href="../index.php" class="exit">Salir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <tr>
                <th>Nombre completo</th>
                <th>Curso</th>
                <th>Mensaje</th>
                <th>Se envio</th>
            </tr>
            <?php
            if ($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo '<tr>';
                    echo '<td>' . $row["nombre"] . '</td>';
                    echo '<td>' . $row["course"] . '</td>';
                    echo '<td>' . $row["message"] . '</td>';
                    echo '<td>' . $row["enviado_en"] . '</td>';
                    echo '</tr>';
                };
            }else {
                echo "<tr><td colspan='3'>No se encontraron resultados</td></tr>";
            }
            ?>
        </table>
    </main>
</body>
</html>