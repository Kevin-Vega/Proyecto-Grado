<?php 

require_once "../../class/Categories.php";

$Categories = new Categories();

$data = array(

"idCategories" =>$_POST['idCategories'],
"Categories" => $_POST['updateCategories']

);

echo $Categories->updateCategories($data);




 ?>