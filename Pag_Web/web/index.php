<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script src="http://cdn.leafletjs.com/leaflet-0.7/leaflet.js"></script> 
        <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7/leaflet.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <style>
            #map {widh: 50px;height: 580px;}
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href=http://fonts.googleapis.com/css?family=Rancho&effect=putting-green>
<style>
.mi-columna{
	height:100px;
}

.mi-cabecera{
	text-align:center;
	font-weight:bold;
	font-size:48px!important;
}

</style>
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<style type="text/css">
#apDiv1 {
	position: absolute;
	width: 171px;
	height: 60px;
	z-index: 1;
	left: 729px;
	top: 7px;
}
.navbar.navbar-default .container-fluid #apDiv1 .font-effect-shadow-multiple center {
	font-size: 25px;
}
.navbar.navbar-default #apDiv1 .font-effect-shadow-multiple center {
	font-size: 48px;
}
.navbar.navbar-default #apDiv1 .font-effect-shadow-multiple {
	font-size: 38px;
}
.navbar.navbar-default .container-fluid .font-effect-shadow-multiple {
	font-size: 42px;
}
.blanco {
	color: #FFF;
}
.blanco {
	color: #FFF;
}
</style>
</head>

<body background="css/fondo.jpg">
<!--BARRA DE NAVEGACION-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
     	<ul class="nav navbar-nav">
        	<li><a href="https://twitter.com/spaceappsZgz?lang=es" target="_blank"><img src="https://sites.google.com/site/2ndfunniestthing/twitter.png" alt="Seguir a 2nd Funniest Thing en Twitter"/></a></li>
            <li><a href="http://pinterest.com/2ndfunniesthing/" target="_blank"><img src="https://sites.google.com/site/2ndfunniestthing/pinterest.png" alt="Seguir a 2nd Funniest Thing en Pinterest" class="header"/></a></li>
            <li><a href="http://feeds.feedburner.com/TutorialesYPiezasnicas-DiysUniquePieces" target="_blank"><img src="https://sites.google.com/site/2ndfunniestthing/mail.png" alt="Seguir a 2nd Funniest Thing por email"/></a></li>
            <li><a href="http://www.linkedin.com/in/2ndfunniestthing" target="_blank"><img src="https://sites.google.com/site/2ndfunniestthing/linkedin.png" alt="Contactar con 2nd Funniest Thing en LinkedIn"/></a></li>
      	</ul>
  <div class="navbar-header font-effect-putting-green">
        	<a class="navbar-brand mi-cabecera" href="#">BOSQUES</a>
  </div>
  <div class="navbar-header font-effect-putting-green" style="float:right">
        	<a class="navbar-brand mi-cabecera" href="#">ABOUT</a>
  </div>
       
</nav>

<div class="header-info-right">
<div class="header cbp-spmenu-push">
</div>
</div>
																<!--script-nav -->
<div class="row">
	<div class="col-md-6" id="map">
        <div style="#map; margin: 40px" id="demo"></div>
    </div>
    <div class="col-md-5 col-md-offset-1">
        <form class="form-signin" style="margin: 20px" action="index.php" method="get">
            <p>
                <label for="inputEmail" class="sr-only">Nick usuario</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </p>
                <form method="post" action="" enctype="multipart/form-data">
            	<p><span class="blanco">Ingresa el archivo</span><span class="color">:</span>
           		<input name="file" type="file" size="20" maxlength="20" />
            </p>
            <input name="coment" type="comentario" id="inputcomentario" class="form-control" placeholder="Comentario" required autofocus>
            </p>
            <p>&nbsp;
            <span class="blanco">Nombre foto:</span>
            <input name="name" type="nombre_foto" id="inputnombre" class="form-control" placeholder="Nombre" required autofocus />
            </p>
            <p>&nbsp;     
            <button name="button" class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
        </form>
    </div>
</div>



<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
        

<script src="forest.js"></script>
<script>
	$("#showRightPush").click(function(){
		$("ul.navigatoin").slideToggle("300" , function(){
		});
	});
</script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<?php
    $user = $_GET['email'];
    $coment = $_GET['coment'];
    $file = $_GET['file'];
    $coords = $_GET[''];
    $name = $_GET['name'];

    //subida file
    $ruta="files/";

    $uploadfile_temporal = $_FILES['file']['tmp_name'];
    $extension = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    $uploadfile_nombre = $ruta.mysql_insert_id().".".$extension;
    $size = $_FILES['file']['size'];
    //echo $uploadfile_nombre;

   // $query = "INSERT INTO photo (name, tamano, comentario, link) VALUES ('.$nombre.', '.$size.', '.$coment.', '.$uploadfile_nombre.')";

    move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);

    $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db("forest_monitor") or die('No se pudo seleccionar la base de datos');

    $query1 = "INSERT INTO users (email) VALUES ('$user')";
    //Como obtengo latitud y longitud del mapa
    $query2 = "INSERT INTO photo (name, tamano, coment, coords, latitud, longitud, link) VALUES ('$name', '$size', '$coment', '$coords', '$latitud?????????', '$longitud????????', '$uploadfile_nombre')";
    $query3 = "SELECT latitud, longitud FROM Photo";

    mysql_query($query1) or die ('Consulta fallida: ' .mysql_error());
    mysql_query($query2) or die ('Consulta fallida: ' .mysql_error());

    $result3 = mysql_query($query3) or die ('Consulta fallida: ' . mysql_error());

    //como paso datos a json
    //temp
    $data = array();

    echo json_encode("var planelatlong = [");

    for ($x = 0; $x < mysql_num_rows($query3); $x++)
    {
        $data[] = mysql_fetch_assoc($query3);
        echo json_encode("[",$data[$x]['lat'],",",$data[$x]['long'],"]");
        if ($x <= (mysql_num_rows($query3)-2) )
        {
            echo json_encode(",");
        }
    }
    echo json_encode("];");

    mysql_close($link);
?>
</body>
</html>
