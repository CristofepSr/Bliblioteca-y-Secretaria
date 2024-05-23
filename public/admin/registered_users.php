<?php
include('../../src/config/database.php');

$sql = "SELECT id, username, email, solicitado_en FROM user";
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
                <li><a href="./admin.php" >Inicio</a></li>
                <li><a href="./messages.php">Messajes</a></li>
                <li><a href="./registered_users.php" class="selet">Usuarios</a></li>
                <li><a href="./rented_books.php">rented books</a></li>
                <li><a href="../index.php" class="exit">Salir</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Correo Electronico</th>
                <th>Se registro</th>
            </tr>
            <?php
            if ($result -> num_rows > 0){
                while($row = $result -> fetch_assoc()){
                    echo '<tr>';
                    echo '<td>' . $row["id"] . '</td>';
                    echo '<td>' . $row["username"] . '</td>';
                    echo '<td>' . $row["email"] . '</td>';
                    echo '<td>' . $row["solicitado_en"] . '</td>';
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