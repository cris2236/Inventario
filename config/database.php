
<?php
$host= $_SERVER["HTTP_HOST"];
//echo $host;
if($host=="localhost"){
	$server   = "localhost";
} else {

$server   = "sql308.byetcluster.com";
}
$username = "user_24356861";
$password = "Pipe.98664654";
$database = "user_24356861_inventario";


$mysqli = new mysqli($server, $username, $password, $database);


if ($mysqli->connect_error) {
    die('error'.$mysqli->connect_error);
}
?>