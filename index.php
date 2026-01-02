<?php
// Leemos (Read) todos los registros para mostrarlos en la tabla.
// Primero incluimos la conexión creada en dbConnection.php.
require_once("dbConnection.php");

// Ejecutamos un SELECT con MySQLi para traer los usuarios.
// ORDER BY id DESC muestra el último registro primero.
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
?>

<html lang="es">

<head>
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Nombre</strong></td>
			<td><strong>Edad</strong></td>
			<td><strong>Correo electrónico</strong></td>
			<td><strong>Acción</strong></td>
		</tr>
		<?php
		// Recorremos cada fila del resultado (mysqli_fetch_assoc).
		// Cada fila es un arreglo asociativo con las columnas de la tabla users.
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>" . $res['name'] . "</td>";
			echo "<td>" . $res['age'] . "</td>";
			echo "<td>" . $res['email'] . "</td>";
			// Los enlaces apuntan a Editar (Update) y Eliminar (Delete).
			echo "<td><a href=\"edit.php?id=$res[id]\">Editar</a> | 
			<a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('¿Estás seguro de que quieres eliminar?')\">Eliminar</a></td>";
		}
		?>
	</table>
</body>

</html>