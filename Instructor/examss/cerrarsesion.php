<?php
	include("sesion.class.php");
	
	$sesion = new sesion();
	$cargo = $sesion->get("cargo");	
	if( $cargo == false )
	{	
		header("Location: jefe.php");
	}
	else 
	{
		$cargo = $sesion->get("cargo");	
		$sesion->borrarsesion();	
		header("location: jefe.php");
	}
?>