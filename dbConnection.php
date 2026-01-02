<?php
// Configuración básica de la conexión MySQL.
// Este CRUD usa MySQLi (no PDO) para que puedas ver las funciones clásicas de PHP.
$databaseHost     = 'localhost';
$databaseName     = 'test';
$databaseUsername = 'root';
$databasePassword = '';

// Abrimos una conexión con el servidor MySQL usando mysqli_connect.
// Si falla, el resto del CRUD no podrá leer/guardar datos.
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);
