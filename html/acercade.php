<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CrudoX</title>
<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
</head>
<body background="../img/fondo.jpg" >

<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button>
	      <a class="navbar-brand" href="#">Bares En Tu Escuela</a>
         </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="topFixedNavbar1">
	      <ul class="nav navbar-nav col-sm-6">
          	<img src="../img/CERVEZAS.jpg" alt="cervezas" width="100%" height="150px"/>
	        <!--Aqui contenido extra en la barra-->
          </ul>
	      <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Encuentra">
            </div>
	        <button type="submit" class="btn btn-default">Buscar</button>
          </form>
          </ul>
        </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="row">
  	<div class="col-md-3">
   	  <div class="well well-lg">
      	<div class="list-group">
  			<a href="../index.html" class="list-group-item">Inicio</a>
  			<a href="bares.php" class="list-group-item">Bares</a>
  			<a href="promo.php" class="list-group-item">Promociones</a>
  			<a href="#" class="list-group-item active">Acerca de...</a>
  			<a href="quienes.html" class="list-group-item">¿Quienes somos?</a>
		</div>
      </div>
    </div>
  	<div class="col-md-8">
    	<h1 style="color: yellow">Acerca de...</h1>
      <br>
      <p style="text-align: justify;">
        <font color="yellow">Somos una organización encargada de consolidar los horarios, menús, servicios y promociones de todos los establecimientos de entretenimiento que se encuentren alrededor de la Facultad de Estudios Superiores
Aragon, con ello pretendemos que el usuario pueda encontrar de una manera eficaz y rápida algún centro de entretemiento que se ajuste a sus gustos y necesidades con sólo un click evitandoles que recorran uno por uno en busca de lo que el cliente quiera. Nosotros tenemos información actualizada sobre los precios, productos y promociones que el establecimiento tenga en tiempo real.</font>
      </p>
<br>
<div align="center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6326.137888715354!2d-99.04541865889057!3d19.47521358601903!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0x5e6fdfca3dee5dd0!2sUNAM+-+FES+Arag%C3%B3n!5e0!3m2!1ses-419!2smx!4v1464230367699" width="500" height="400" frameborder="0" style="border:0" allowfullscreen></iframe></div>
<br>
<div align="center"><font color="yellow">¿Quieres dejarnos algún comentario? Llena el siguiente formulario:</font></div>
<br>
<div align="center">
  <form action="../php/formcoment.php" method="post">
    <font color="yellow">Escribe tu nombre:</font><br>
    <input type="text" name="nombre" value="" />
    <br/>
    <font color="yellow">Escribe tu apellido: </font><br>
    <input type="text" name="apellido" value="" />
    <br/>
    <font color="yellow">Escribe tu correo:  </font><br>
    <input type="text" name="correo" value="" />
    <br/>
    <font color="yellow">Escribe tu comentario: </font><br>
    <input type="text" name="comentario" value="" maxlength = "250" />
    </br>
    <br>
    <input type="submit" value="Enviar" /><input type="reset" name="limpiar" value="Borrar datos del formulario" />
  </form>
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
    $comentarios=mysql_query("SELECT nombre, apellido, e_mail, coments FROM comentarios;") or die("Consulta fallida" .mysql_error());
  ?>
  <?php 
    //Imprimir resultados en una tabla
    if ($row = mysql_fetch_array($comentarios)){
        echo "<div class='well well-lg'><table border = '1' id='tablaComentarios'>";
        echo "<tr><th>Nombre</th><th>Apellido</th><th>E-Mail</th><th>Comentario \t\t</th></tr>";
      do {
        echo "<tr><td>".$row["nombre"]."</td><td>".$row["apellido"]."</td><td>".$row["e_mail"]."</td><td>".$row["coments"]."</td></tr>";
      } while ($row = mysql_fetch_array($comentarios));
        echo "</table> </div>";
    }
  ?>
  <?php 
    //liberar resultados
    mysql_free_result($comentarios);
  ?>
  <?php 
    //Cerrar conección
    mysql_close($link);
  ?>
</div>

<script src="../js/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
<script src="../css/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>
</body>
</html>
