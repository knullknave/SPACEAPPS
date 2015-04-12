<?php
    $username = "root";
    $password = "";
    $host = "localhost";
    $database="forest_monitor";
    
    $server = mysql_connect($host, $username, $password);
    $connection = mysql_select_db($database, $server);

    $myquery = "
SELECT u.email, link, name, latitud, longitud FROM photo p, users u where p.id_users = u.id;";
    $query = mysql_query($myquery);
    
    if ( ! $query ) {
        echo mysql_error();
        die;
    }
    
    $data = array();
 
	echo "var features = [";
    
    for ($x = 0; $x < mysql_num_rows($query); $x++) {
        $data[] = mysql_fetch_assoc($query);
		echo "{\n\t\"type\": \"Feature\",\n";
		echo "\t\"properties\": {\n";
		echo "\t\t\"name\": \"" . $data[$x]['name'] . "\",\n";
		echo "\t\t\"imagen\": \"" . $data[$x]['link'] . "\",\n";
		echo "\t\t\"email\": \"" . $data[$x]['email'] . "\",\n";
		echo "\t\t\"show_on_map\": \"true\"\n";
		echo "\t},\n";
		echo "\t\"geometry\": {\n";
		echo "\t\t\"type\": \"Point\",\n";
		echo "\t\t\"coordinates\": ";
        echo "[",$data[$x]['longitud'],",",$data[$x]['latitud'],"]\n";
        if ($x <= (mysql_num_rows($query)-2) ) {
			echo "";
		}
		echo "\t}\n";
		//echo "}";
		if ($x < mysql_num_rows($query) - 1)
			echo "}, ";
    }

    echo "}];";
     
 	//echo "var features = " . json_encode($data) . ";";

    mysql_close($server);
?>
