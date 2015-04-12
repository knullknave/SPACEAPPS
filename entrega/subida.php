 <?php
	$link = mysql_connect('localhost', 'root', '') or die('No se pudo conectar: ' . mysql_error());
    mysql_select_db("forest_monitor") or die('No se pudo seleccionar la base de datos');
	
	$user = $_POST['email'];
    $coment = $_POST['coment'];
    $file = $_FILES['file']['name'];
    $name = $_POST['name'];
	$latitud = $_POST['latitud'];
	$longitud = $_POST['longitud'];
	
	$sql="INSERT INTO users(email) VALUES ('$user')";
	mysql_query($sql);
	
	$seleccionUsuario="SELECT * FROM users WHERE email='$user'";
	$reg1=mysql_query($seleccionUsuario);
	$res1=mysql_fetch_array($reg1);
	$idUser=$res1['id'];
	echo $idUser;
	
	$inserccion="INSERT INTO photo(name,coment,link,id_users, latitud, longitud) VALUES ('$name','$coment','./files/$file',$idUser, $latitud, $longitud)";
	mysql_query($inserccion);
	
	$uploaddir = "files/";
	$uploadfile = $uploaddir . basename($_FILES['file']['name']);

		move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile);
		
		header("location:index.php");
?>