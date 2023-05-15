<?php 
session_start();
require_once "../../class/Manager.php";

$Manager = new Manager();
$idFiles = $_POST['idFiles'];
$idUsuarios = $_SESSION['idUsuarios'];

$nameFiles = $Manager->getNameFiles($idFiles);

 $Dir="../../documents".$idUsuarios."/" .$nameFiles;

	if(unlink($Dir)){

     echo $Manager->deleteRegisterManager($idFiles);

	}else{
		echo 0;
	}



 ?>