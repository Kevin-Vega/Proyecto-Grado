<?php 

require_once "Conexion.php";

class Users extends Conectar{

	public function addUser($data){
		$conexion = Conectar::conexion();

    if(self::searchRepeatUser($data['email'])){
      return 2;

    }else{

//insertar registro

$sql ="INSERT INTO instructor(nombres,apellidos,fecha_nacimiento,email,numero_celular,profesion,password) VALUES (? ,? ,? ,? ,? ,? ,?)";

		$query = $conexion->prepare($sql);
		$query->bind_param('sssssss', $data['name'],
			$data['lastname'],
			$data['bthday'],
			$data['email'],
			$data['tlf'],
      $data['pfs'],
			$data['password']);

		$success =$query->execute();
		$query->close();

		return $success;
	}  

} 
  //Validar que email no exista

public function searchRepeatUser($email){

   $conexion = Conectar::conexion();

    $sql = "SELECT email FROM  instructor WHERE email ='$email'";

    $result = mysqli_query($conexion,$sql);

    $data = mysqli_fetch_array($result);

    if($data['email'] != "" || $data['email'] == $email){
      return 1;
    }else{
      return 0;
    }
  }

  //logeo validación

public function login($email,$password){
     $conexion = Conectar::conexion();
  $sql = "SELECT count(*) as encontrado FROM instructor WHERE email = '$email' AND password= '$password'";

     $result = mysqli_query($conexion,$sql);

     $respuesta = mysqli_fetch_array($result)['encontrado'];

     if($respuesta > 0){

      $_SESSION['username']=$email;

         $sql="SELECT user_id FROM instructor WHERE email = '$email' AND password= '$password'";

         $result = mysqli_query($conexion,$sql);

         $idUsuarios = mysqli_fetch_row($result)[0];

      $_SESSION['idUsuarios']= $idUsuarios;

      return 1;
     }else{
      return 0;
     }

  } 

}


 ?>