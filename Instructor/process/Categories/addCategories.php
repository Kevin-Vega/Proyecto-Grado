<?php 

//paara agregar categorias
session_start();

require_once "../../class/Categories.php";
$Categories = new Categories();

$data=array(

	"idUsuarios" => $_SESSION['idUsuarios'],
	"Categories" => $_POST['Categories']

	 );

echo $Categories->addCategories($data);
 ?>