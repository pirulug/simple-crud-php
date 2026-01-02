<html lang="es">

<head>
	<title>Add Data</title>
</head>

<body>
	<h2>Add Data</h2>
	<p>
		<a href="index.php">Home</a>
	</p>

	<!--
		Formulario HTML para Crear (Create) un nuevo usuario.
		Al enviar, hace POST hacia addAction.php.
	-->
	<form action="addAction.php" method="post" name="add">
		<table width="25%" border="0">
			<tr>
				<td>Nombre</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Edad</td>
				<td><input type="number" name="age"></td>
			</tr>
			<tr>
				<td>Correo electrónico</td>
				<td><input type="email" name="email"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="submit" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>

</html>