<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		//Abrir conección
		$usuario="root";
		$contra="";
		$host="127.0.0.1";
		$link=mysql_connect($host,$usuario,$contra) or die("Error al conectar" .mysql_error());
		echo("Conección exitosa<br>");
		//Seleccionar base de datos
		mysql_select_db("test") or die("No se encontró la base de datos");
	 ?>
	<?php 
		//Hacer una consulta
		$consulta=mysql_query("show tables") or die("Consulta fallida" .mysql_error());
		echo("Consulta realizada<br>");
	 ?>
	 <?php 
	 	//Imprimir resultados en una tabla
	 	echo("<table>\n");
	 	while ($contenido = mysql_fetch_array($consulta, MYSQL_ASSOC)) {
	 		foreach ($contenido as $elemento) {
	 			echo("<tr>\n");
	 			echo("<td>\n $elemento </td>\n");
	 			echo("</tr>\n");
	 		}
	 	}
	 	echo("</table>\n");
	  ?>
	 <?php 
	 	//liberar un resultado
	 	mysql_free_result($consulta);
	 	echo("var Consulta libre<br>");
	  ?>
	 <?php 
	 	//Cerrar conección
	 	mysql_close($link);
	 	echo("Conección cerrada");
	  ?>
</body>
</html>