<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="shortcut icon" href="../../assets/img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../../assets/css/secretaria/contacto.css">
    <link rel="stylesheet" href="../../assets/css/secretaria/menu.css">

    <link rel="stylesheet" href="../../assets/css/fonst.css">
    <link rel="stylesheet" href="../../assets/css/scrollbar.css">
</head>

<body>
    <header class="header">
        <nav class="menu">
            <ul class="menu_list">
                <li>
                    <a href="./secretaria.php">Inicio</a>
                </li>
                <li>
                    <a href="./sobre_nosotros.php">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="./servicios.php">Servicios</a>
                </li>
                <li>
                    <a href="./equipo.php">Equipo</a>
                </li>
                <li>
                    <a class="contact" href="./contacto.php">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <main>
            <div class="container">
                <form action="../../src/views/contact.php" method="post">
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name"
                        placeholder="Nombre Completo">
                    <label for>Curso</label>
                    <input type="text" name="course" id="course"
                        placeholder="Curso">
                    <textarea name="message" id="message" cols="30" rows="10"
                        maxlength="200" placeholder="Mensaje..."></textarea>
                    <input type="submit" value="Enviar">
                </form>
            </div>
        </main>
</body>

</html>