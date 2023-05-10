<?php 

class Conectar{

public function conexion(){

	$server = "localhost";
	$user = "root";
	$pass = "";
	$DB = "makedeve_fangusins";

	$conexion = mysqli_connect($server,$user,$pass,$DB);


	return $conexion;
}
}

 ?>