<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'testback';
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die('Falló la conexión');
}

?>