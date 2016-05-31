<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Comentarios</title>
</head>
<body>
	<?php
		//abrir la conexion
		$usuario="root";
		$contra="";
		$host="127.0.0.1";
		$link=mysql_connect($host,$usuario,$contra) or die("Error al conectar" .mysql_error());
		echo("Conexión exitosa<br>");
		//Seleccionar base de datos
		mysql_select_db("test") or die("No se encontró la base de datos");

		$nombre = $_POST["nombre"];
		$apellido = $_POST["apellido"];
		$correo = $_POST["correo"];
		$comentario = $_POST["comentario"];

		//llenar la base de datos
		$insertar = "INSERT INTO comentarios(nombre, apellido, e_mail, coments) VALUES ('$nombre', '$apellido', '$correo',
		'$comentario');";

		//Ejecutar consulta
		$resultado = mysql_query($insertar)or die("Consulta fallida" .mysql_error());
		if(!$resultado) {
			echo '<script language="javascript">alert("Error al publicar :(");</script>';
			header('Location: ../html/acercade.php');
		} else {
			echo '<script language="javascript">alert("Comentario Agregado :D");</script>';
			header('Location: ../html/acercade.php');
		}
		//Cerrar conexión
		mysql_close($link);
		echo("Conexion cerrada");
	?>
</body>
</html>