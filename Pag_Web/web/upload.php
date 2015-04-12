<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Documento sin título</title>
        <style type="text/css">
        #apDiv1 {
            position: absolute;
            width: 314px;
            height: 142px;
            z-index: 1;
            left: 254px;
            top: 174px;
        }
        .font-effect-putting-green {
            font-size: 48px;
        }
        .hola {
            font-size: 48px;
        }
        .color {
            color: #CCC;
        }
        </style>
        <link href="bootstrap.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <span class="hola">
        <div class="container">
        </head>

        <body background="css/fondo.jpg">
        </span>
        <link rel="stylesheet" type="text/css" href=http://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple>
        <div class="font-effect-shadow-multiple"><center>SUBIR FOTO</center></div>
        <form class="form-signin" action="Upload.php" method="post" enctype="multipart/form-data">
            <p>
            <label for="inputEmail" class="sr-only">Nick usuario</label>
            <input name="email" type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only"><br />
        <form method="post" action="" enctype="multipart/form-data" action="Upload.php" method="post" enctype="multipart/form-data">
          <p><span class="color">Ingresa el archivo:</span>
            <input name="imagen" type="file" size="20" maxlength="20" />
        </p>
        <input name="coment" type="comentario" id="inputcomentario" class="form-control" placeholder="Comentario" required autofocus>
        </p>
        <p>&nbsp;
        Nombre foto:
        <input name="nombre" type="nombre_foto" id="inputnombre" class="form-control" placeholder="Nombre" required autofocus />
         </p>
         <p>&nbsp;
        <button class="btn btn-lg btn-primary btn-block" type="submit">Enviar</button>
        </form>
        <?php

                $email = $_GET['email'];

                $file = $_GET['imagen'];

                $coment = $_GET['coment'];

                $nombre = $_GET['nombre'];


            $link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
            mysql_select_db("forest_monitor") or die('No se pudo seleccionar la base de datos');

            $query = "INSERT INTO photo (name, tamano, px, comentario, link) VALUES ('.$nombre.', '', '', '.$coment.', '')";
            mysql_query($query) or die ('Consulta fallida: ' . mysql_error());

            $ruta="images/";

            $uploadfile_temporal = $_FILES['imagen']['tmp_name'];
            $extension = pathinfo($_FILES['imagen']['name'], PATHINFO_EXTENSION);
            $uploadfile_nombre = $ruta.mysql_insert_id().".".$extension;
            $size = $_FILES['imagen']['size'];
            echo $uploadfile_nombre;

            $query = "INSERT INTO photo (name, tamano, comentario, link) VALUES ('.$nombre.', '.$size.', '.$coment.', '.$uploadfile_nombre.')";

            move_uploaded_file($uploadfile_temporal,$uploadfile_nombre);
        ?>
    </body>
</html>
