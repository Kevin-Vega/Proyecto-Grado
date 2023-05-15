<?php 

require_once "Conexion.php";

class Manager extends Conectar{

//metodo registro asociado al archivo que cargo

	public function addRegisterFiles($data){
		$conexion = Conectar::conexion();
         
    $sql ="INSERT INTO files (user_id,id_categorias,nombre,tipo,ruta) VALUES (?,?,?,?,?)";

		$query= $conexion->prepare($sql);

		$query->bind_param("iisss",		
			$data['idUsuarios'],
			$data['idCategories'],
			$data['nameFile'],
			$data['typeFile'],
			$data['finalDir']
		);

		$request = $query->execute();
		$query->close();
		return $request;


	}

}


// 	public function getNameFiles($idFiles){
// 		$conexion = Conectar::conexion();
// 		$sql = "SELECT nombre FROM tbl_files WHERE id_archivo = $idFiles";
// 		$result = mysqli_query($conexion,$sql);
// 		return fetch_array($result)['nombre'];
// 	}

// 	public function deleteRegisterManager($idFiles){
// 		$conexion = Conectar::conexion();
// 		$sql = "DELETE FROM tbl_files WHERE id_archivo = ? ";
// 		$query= $conexion->prepare($sql);
// 		$query->bind_param("i",$idFiles);
// 		$request = $query->execute();
// 		$query->close();
// 		return $request;
// 	}

// 	public function seeDireManager($idFiles){
// 		$conexion = Conectar::conexion();
// 		$sql = "SELECT nombre,tipo FROM tbl_files WHERE id_archivo = 'idFiles'";

// 		$result = mysqli_query($conexion,$sql);
		
// 		$data = mysqli_fetch_array($result);
// 		$nameFiles = $data['nombre'];
// 		$extension =$data['tipo'];
// 		return self::typeFile($nameFiles,$extension);
// 	}
// //dos parametros recibidos de arriba
// 	public function typeFile($nombre,$extension){

// 		$idUsuarios = $_SESSION['idUsuarios'];

// 		$directorie ="../documents/" . $idUsuarios. "/". $nombre ;

// 		switch ($extension) {
// 			case 'png':
// 			return '<img src="'.$directorie.'"  width ="50%">';
// 			break;
// 			case 'jpe':
// 			return '<img src="'.$directorie.'"  width ="50%">';
// 			break;
// 			case 'pdf':
			
// 			return '<embeded src ="'.$directorie.'#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" width="100%" height = "600px" />';

// 			break;
// 			case 'mp3':
			
// 			return '<audio controls src="'.$directorie.'"></audio>';

// 			break;
// 			case 'mp4':
			
// 			return '<video src="'.$directorie.'" controls width="100%" height = "600px"></video>';

// 			break;
			
// 			default:
//          		# code...
// 			break;
// 		}
// 	}
// }

 ?>