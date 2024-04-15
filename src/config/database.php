<?php
$host = 'localhost';
$name = 'root';
$pass = '';
$dbname = 'bibliAndSecret';

$conn = new mysqli($host, $name, $pass, $dbname);

if ($conn){
    echo'Conecion Exitosa';
}else{
    echo 'Conecion Fallida'. mysqli_connect_error();
}
?>