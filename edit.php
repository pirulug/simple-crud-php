<?php
// Formulario de Update: primero leemos el registro por ID.
require_once("dbConnection.php");

// Tomamos el id desde la URL y lo convertimos a entero por seguridad básica.
$id = (int) $_GET['id'];

// Buscamos el registro asociado a ese id.
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");

// Obtenemos una fila como arreglo asociativo para rellenar el formulario.
$resultData = mysqli_fetch_assoc($result);

$name  = $resultData['name'];
$age   = $resultData['age'];
$email = $resultData['email'];
?>
<html lang="es">

<head>
	<title>Edit Data</title>
</head>

<body>
	<h2>Edit Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="name" value="<?php echo $name; ?>"></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="number" name="age" value="<?php echo $age; ?>"></td>
			</tr>
			<tr>
				<td>Correo electrónico</td>
				<td><input type="email" name="email" value="<?php echo $email; ?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>
				<td><input type="submit" name="update" value="Actualizar"></td>
			</tr>
		</table>
	</form>
</body>

</html>