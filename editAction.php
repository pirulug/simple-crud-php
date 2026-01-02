<?php
// Acción Update: recibe el formulario y actualiza un registro existente.
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Sanitizamos entradas para armar el SQL con MySQLi.
	$id    = (int) $_POST['id'];
	$name  = mysqli_real_escape_string($mysqli, $_POST['name']);
	$age   = mysqli_real_escape_string($mysqli, $_POST['age']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);

	// Validación mínima de campos vacíos.
	if (empty($name) || empty($age) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Nombre campo está vacío.</font><br/>";
		}

		if (empty($age)) {
			echo "<font color='red'>Edad campo está vacío.</font><br/>";
		}

		if (empty($email)) {
			echo "<font color='red'>Correo electrónico campo está vacío.</font><br/>";
		}
	} else {
		// Ejecutamos el UPDATE contra la tabla users.
		$result = mysqli_query($mysqli, "UPDATE users SET `name` = '$name', `age` = '$age', `email` = '$email' WHERE `id` = $id");

		// Mensaje de éxito.
		echo "<p><font color='green'>Datos actualizados correctamente!</p>";
		echo "<a href='index.php'>Ver Resultado</a>";
	}
}
