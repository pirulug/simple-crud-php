<?php
// Acción Delete: elimina un registro por ID.
require_once("dbConnection.php");

// Tomamos el id desde la URL y lo convertimos a entero.
$id = (int) $_GET['id'];

// Ejecutamos el DELETE en la tabla users.
$result = mysqli_query($mysqli, "DELETE FROM users WHERE id = $id");

// Redirigimos al listado principal.
header("Location:index.php");
