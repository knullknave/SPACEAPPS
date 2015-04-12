<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
<style type="text/css">
    #apDiv1
    {
        position: absolute;
        width: 314px;
        height: 142px;
        z-index: 1;
        left: 254px;
        top: 174px;
    }
.container .form-signin .font-effect-emboss center
{
	font-size: 48px;
}
</style>
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
</head>
<body background="css/fondo.jpg">
<div class="container">

    <form class="form-signin" action="Formulario.php" method="get">
        <link rel="stylesheet" type="text/css" href=http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple>
        <div class="font-effect-shadow-multiple"><center>REGISTRO</center></div>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="pass" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> 
          <strong>Recuérdame </strong></label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Registrate</button>
      </form>

    </div> <!-- /container -->

</div>
	<?php
		$email = $_GET['email'];
		$pass = $_GET['pass'];

		$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
		mysql_select_db("forest_monitor") or die('No se pudo seleccionar la base de datos');

		$query = "INSERT INTO users (email, pass) VALUES ('.$email.', '.$pass.')";
		mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

        mysql_close($link);
	?>
</body>
</html>
