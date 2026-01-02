<html lang="es">

<head>
	<title>Add Data</title>
</head>

<body>
	<?php
	// Acción Create: recibe el formulario y guarda un nuevo registro.
	require_once("dbConnection.php");

	if (isset($_POST['submit'])) {
		// Sanitizamos entradas para usarlas en SQL con MySQLi (sin PDO).
		$name  = mysqli_real_escape_string($mysqli, $_POST['name']);
		$age   = mysqli_real_escape_string($mysqli, $_POST['age']);
		$email = mysqli_real_escape_string($mysqli, $_POST['email']);

		// Validación mínima: no permitir campos vacíos.
		if (empty($name) || empty($age) || empty($email)) {
			if (empty($name)) {
				echo "<font color='red'>El campo Nombre está vacío.</font><br/>";
			}

			if (empty($age)) {
				echo "<font color='red'>El campo Edad está vacío.</font><br/>";
			}

			if (empty($email)) {
				echo "<font color='red'>El campo Correo electrónico está vacío.</font><br/>";
			}

			// Enlace para volver al formulario y corregir datos.
			echo "<br/><a href='javascript:self.history.back();'>Volver</a>";
		} else {
			// Insertamos el registro (CREATE) en la tabla users.
			$result = mysqli_query($mysqli, "INSERT INTO users (`name`, `age`, `email`) VALUES ('$name', '$age', '$email')");

			// Mostramos mensaje de éxito.
			echo "<p><font color='green'>¡Datos agregados correctamente!</font></p>";
			echo "<a href='index.php'>Ver resultados</a>";
		}
	}
	?>
</body>

</html>