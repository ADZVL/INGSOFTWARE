<p align="center">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d940.3706718758297!2d-99.04612070076425!3d19.477858370327642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x1bb48b081ff13682!2sChilanguitos+Bar!5e0!3m2!1ses-419!2smx!4v1464234492732" width="50%" height="50%" frameborder="0" style="border:0" allowfullscreen id="mapa"></iframe>
</p>
<?php 
	//Abrir conección
	$usuario="root";
	$contra="";
	$host="127.0.0.1";
	$link=mysql_connect($host,$usuario,$contra) or die("Error al conectar" .mysql_error());
	//Seleccionar base de datos
	mysql_select_db("test") or die("No se encontró la base de datos");
?>
<?php 
	//Consultas
	$horario=mysql_query("SELECT telefono, horario FROM bares WHERE id=5;") or die("Consulta fallida" .mysql_error());
	$productos=mysql_query("SELECT nombre, precio FROM productos WHERE idBar=5;") or die("Consulta fallida" .mysql_error());
?>
<?php
	$h= mysql_fetch_row($horario);
	echo("<div id=\"horario\">");
	echo("<p>Horario: $h[1]</p>");
	echo("<p>Telefono: $h[0]</p>");
	echo("</div>");
?>
<?php 
	//Imprimir resultados en una tabla
	if ($row = mysql_fetch_array($productos)){
   		echo "<table border = '1'>";
   		echo "<tr><th>Nombre</th><th>Precio</th></tr>";
   	do {
    	echo "<tr><td>".$row["nombre"]."</td><td>"."\$".$row["precio"]."</td></tr>";
   	} while ($row = mysql_fetch_array($productos));
   		echo "</table>";
	}
?>
<?php 
	//liberar resultados
	mysql_free_result($horario);
	mysql_free_result($productos);
?>
<?php 
	//Cerrar conección
	mysql_close($link);
?>