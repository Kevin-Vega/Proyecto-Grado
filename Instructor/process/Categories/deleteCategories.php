<?php 

session_start();

require_once "../../class/Categories.php";

$Categories = new Categories();

echo $Categories->deleteCategories($_POST['idCategories']);


 ?>