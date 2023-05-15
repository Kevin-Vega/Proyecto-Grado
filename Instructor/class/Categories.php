<?php 
//Conexion de Categorias

require_once "Conexion.php";

class Categories extends Conectar{
	public function addCategories($data){
          $conexion = Conectar::conexion();

          $sql = "INSERT INTO categories (user_id,categoria) VALUES(?, ?)";

          $query = $conexion->prepare($sql);
          $query->bind_param("is",$data['idUsuarios'],$data['Categories']);

          $request = $query->execute();
          $query->close();

          return $request;
	}

//creacion metodo eliminar
	public function deleteCategories($idCategories){

		$conexion = Conectar::conexion();
		$sql = "DELETE FROM  categories WHERE id = ?";
		$query = $conexion->prepare($sql);
		$query->bind_param('i',$idCategories);
		$request = $query->execute();
		$query->close();
		return $request;
         
	}

//creacion metodo editar Categorias
 
 public function getCategories($idCategories){
 	$conexion = Conectar::conexion();

 	$sql = "SELECT id,categoria  FROM categories WHERE id = '$idCategories'";

 	$result= mysqli_query($conexion,$sql);

 	$categories = mysqli_fetch_array($result);

 	$data= array(
      "idCategories" =>$categories['id'],
      "nameCategories" =>$categories['categoria']

 	);
return $data;

 }

 //Actualizar
 public function updateCategories($data){
 	$conexion = Conectar::conexion();

 	$sql ="UPDATE categories SET  categoria = ? WHERE id = ? ";

 	$query = $conexion->prepare($sql);

 	$query->bind_param('si',$data['Categories'],
                            $data['idCategories']
                             );

 	$respuesta = $query->execute();
 	$query->close();
 	return $respuesta;


 }

}

 ?>
