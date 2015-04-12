<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
        <link rel="stylesheet" href="leaflet-0.7.3/leaflet.css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <style>
            #map {widh: 50px;height: 580px;}
        </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Rancho&effect=putting-green">
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
  <div>
  <img src="SpaceAppsChallenge.jpg" width="50px" height="50px">
  </div>
       
</nav>

<div class="header-info-right">
<div class="header cbp-spmenu-push">
</div>
</div>
																<!--script-nav -->
<div class="row" style="margin-left:5px">
	<div class="col-md-6" >
        <div id="map"></div>
    </div>
    <div class="col-md-5 col-md-offset-1" style="float:left">
        <form class="form-signin" style="margin: 20px" action="subida.php" method="post" enctype="multipart/form-data">
            <p>
                <label for="inputEmail" class="sr-only">Nick usuario</label>
                <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </p>
                <form method="post" action="" enctype="multipart/form-data">
            	<p><span class="blanco">Ingresa el archivo</span><span class="color">:</span>
           		<input name="file" type="file" size="20" maxlength="20" />
            </p>
			<p><input name="latitud" type="text" id="latitud" class="form-control" placeholder="Latitud"></p>
			<p><input name="longitud" type="text" id="longitud" class="form-control" placeholder="Longitud"></p>
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
         <script
        src="leaflet-0.7.3/leaflet.js">
    </script>
<script>

	<?php include 'cargar.php'; ?>

        map = L.map('map', {center:[41.6, -0.8], zoom: 2});

		function onMapClick(e) {
			document.getElementById("latitud").value = e.latlng.lat;
			document.getElementById("longitud").value = e.latlng.lng;

			var blackIcon = L.icon({iconUrl: 'http://cdn.flaticon.com/png/256/23746.png',
				iconSize: [38, 38]});
			L.marker([e.latlng.lat, e.latlng.lng], {icon: blackIcon}).addTo(map);
		}

		map.on('click', onMapClick);
		
		L.geoJson(features, {
			onEachFeature: function(feature, layer) {
				punto = feature.properties;
				layer.bindPopup("<div>Nombre:" + punto.name + "<br/>Autor: " + punto.email + "<br/><img src='" + punto.imagen + "' width='180px' height='180px'/></div>")
			}
		}).addTo(map);
		
        mapLink = 
            '<a href="http://openstreetmap.org">OpenStreetMap</a>';
		L.tileLayer(
            'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
            }).addTo(map);

		
    </script>

</body>
</html>
