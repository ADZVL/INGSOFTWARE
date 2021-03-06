﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CrudoX</title>
<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
<link rel="stylesheet" type="text/css" href="..\css\estiloPromo.css">
</head>
<body background="../img/fondo.jpg">

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
  			<a href="#" class="list-group-item active">Promociones</a>
  			<a href="acercade.php" class="list-group-item">Acerca de...</a>
  			<a href="quienes.html" class="list-group-item">¿Quienes somos?</a>
		</div>
      </div>
    </div>
  	<div class="col-md-8">

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
      $c1=mysql_query("SELECT nombre, descripcion FROM promocion WHERE id=1;") or die("Consulta fallida" .mysql_error());
      $c2=mysql_query("SELECT nombre, descripcion FROM promocion WHERE id=2;") or die("Consulta fallida" .mysql_error());
      $c3=mysql_query("SELECT nombre, descripcion FROM promocion WHERE id=3;") or die("Consulta fallida" .mysql_error());
      $c4=mysql_query("SELECT nombre, descripcion FROM promocion WHERE id=4;") or die("Consulta fallida" .mysql_error());
      $c5=mysql_query("SELECT nombre, descripcion FROM promocion WHERE id=5;") or die("Consulta fallida" .mysql_error());
    ?>
      
    <div class="row">
      <div class="col-md-12">
        <div class="contenedor">
          <ul id="anima">
            <li>Borrachos</li>
            <li>Usuarios</li>
            <li>Lindas Damas</li>
          </ul>  
        </div>
      </div>
      <div class="clo-md-12">
        <div class="row">
        <div class="contenedorDos">
        <div class="carta">
          <div class="lado frente">
            <img src="..\img\primera.jpg" id="imgAnima">
          </div>
          <div class="lado atras">
            <h1>PromoYadis</h1>
            <?php
              $con1=mysql_fetch_row($c2);
              echo("<h5>$con1[0]</h5>");
              echo("<p>$con1[1]</p>");
            ?>
          </div>
        </div>
        <div class="carta">
          <div class="lado frente">
            <img src="..\img\segunda.jpg" id="imgAnima">
          </div>
          <div class="lado atras">
            <h1>PromoSalSiPuedes</h1>
            <?php
              $con1=mysql_fetch_row($c3);
              echo("<h5>$con1[0]</h5>");
              echo("<p>$con1[1]</p>");
            ?>
          </div>
        </div>
        <div class="carta">
          <div class="lado frente">
            <img src="..\img\cuarta.jpg" id="imgAnima">
          </div>
          <div class="lado atras">
            <h1>PromoChabela</h1>
            <?php
              $con1=mysql_fetch_row($c4);
              echo("<h5>$con1[0]</h5>");
              echo("<p>$con1[1]</p>");
            ?>
          </div>
        </div>
        <div class="carta">
          <div class="lado frente">
            <img src="..\img\tercera.jpg" id="imgAnima">
          </div>
          <div class="lado atras">
            <h1>PromoRodeo</h1>
            <?php
              $con1=mysql_fetch_row($c1);
              echo("<h5>$con1[0]</h5>");
              echo("<p>$con1[1]</p>");
            ?>
          </div>
        </div>
        <div class="carta">
          <div class="lado frente">
            <img src="..\img\quinta.jpg" id="imgAnima">
          </div>
          <div class="lado atras">
            <h1>PromoChilanguitos</h1>
            <?php
              $con1=mysql_fetch_row($c5);
              echo("<h5>$con1[0]</h5>");
              echo("<p>$con1[1]</p>");
            ?>
          </div>
        </div>
      </div>
    </div>
      </div>
    </div>
    <?php 
      //liberar resultados
      mysql_free_result($c1);
      mysql_free_result($c2);
      mysql_free_result($c3);
      mysql_free_result($c4);
      mysql_free_result($c5);
    ?>
    <?php 
      //Cerrar conección
      mysql_close($link);
    ?>
  </div>
</div>
     


<script src="../js/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
<script src="../css/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>
</body>
</html>
