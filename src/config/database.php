<?php
$host = 'localhost';
$name = 'root';
$pass = '';
$dbname = 'bibliAndSecret';

$conn = new mysqli($host, $name, $pass, $dbname);

if ($conn->connect_error) {
    die("La conexión falló: " . $conn->connect_error);
}
?>