<?php 

session_start();
require_once "../../class/Manager.php";

$Manager = new Manager();
 
$idCategories = $_POST['FilesCategories'];
$idUsuarios = $_SESSION['idUsuarios'];



if($_FILES['Documents']['size']>0){
    $carpetUser = '../../documents/'.$idUsuarios;

    if(!file_exists($carpetUser)){
    	mkdir($carpetUser,0777,true);
    }

	$totalFiles = count($_FILES['Documents']['name']);
	for($i=0; $i < $totalFiles; $i++){

		$nameFile = $_FILES['Documents']['name'][$i];
		$explode = explode('.',$nameFile);
		$typeFile = array_pop($explode);

		$dirStore = $_FILES['Documents']['tmp_name'][$i];
		
		$finalDir = $carpetUser. "/" .$nameFile;

		$dataInsertFile = array(

			"idUsuarios" =>$idUsuarios,
			"idCategories" =>$idCategories,
			"nameFile" =>$nameFile,
			"typeFile" =>$typeFile,
			"finalDir" => $finalDir
		     );

	    if(move_uploaded_file($dirStore, $finalDir)){
			$request = $Manager->addRegisterFiles($dataInsertFile);
		   }	
		}
		echo $request;
	}else{

		echo 0;

}


?>