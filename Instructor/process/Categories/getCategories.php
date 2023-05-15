<?php 

require_once "../../class/Categories.php";
$Categories = new Categories();

echo json_encode($Categories->getCategories($_POST['idCategories']));

 ?>