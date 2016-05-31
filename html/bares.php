<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>CrudoX</title>
<link href="../css/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="../css/estilo.css" rel="stylesheet" type="text/css">
<link href="../css/estiloBares.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" type="image/x-icon" href="../img/favicon.ico">
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="../img/favicon.ico">
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
  			<a href="#" class="list-group-item active">Bares</a>
  			<a href="promo.html" class="list-group-item">Promociones</a>
  			<a href="acercade.html" class="list-group-item">Acerca de...</a>
  			<a href="quienes.html" class="list-group-item">¿Quienes somos?</a>
		</div>
      </div>
    </div>
  	<div class="col-md-8">
    	<div class="well" id="divBares">
        <ul class="nav nav-tabs" id="menuBares">
          <li role="presentation" class="active" onclick="cambiar(0)" id="li0"><a href="#">Rodeo</a></li>
          <li role="presentation" onclick="cambiar(1)" id="li1"><a href="#" >Yadis</a></li>
          <li role="presentation" onclick="cambiar(2)" id="li2"><a href="#">SalSiPuedes</a></li>
          <li role="presentation" onclick="cambiar(3)" id="li3"><a href="#">Chabela</a></li>
          <li role="presentation" onclick="cambiar(4)" id="li4"><a href="#">Chilanguitos</a></li>
        </ul>
        <div id="contenido"></div>
      </div>
    </div>
</div>

<script src="../js/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
<script src="../css/bootstrap/js/bootstrap.js" type="text/javascript"></script>
<script src="../js/script.js" type="text/javascript"></script>
<script src="../js/bares.js" type="text/javascript"></script>
</body>
</html>
