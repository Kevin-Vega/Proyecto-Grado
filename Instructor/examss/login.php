<?php
  require_once("sesion.class.php");
  
  $sesion = new sesion();
//require_once("sesion.class.php");
 

    $usuario  = $_POST["usuario"];
    $password = $_POST["usuario"];//$password = md5($_POST["password"]); para MD5
    $cargo    = $_POST['cargo'];

    
    if(validarUsuario($usuario,$password,$cargo) == true){      
      
      
      $sesion->set("cargo",$cargo);
      $sesion->set("usuario",$usuario) ;      
      if ($cargo =='4') {


      echo "<script> alert (\"Contraseña Correcta \"); </script>"; 
      echo "<script language=Javascript> location.href=\"admin/index.php\"; </script>"; 
      echo "LOGIN CORRECTO";
      }
      elseif ($cargo =='3') {
    

      echo "<script> alert (\"Contraseña Correcta\"); </script>"; 
      echo "<script language=Javascript> location.href=\"estudiantes/principal.php\"; </script>"; 
      echo "LOGIN CORRECTO";
      //header("location: examen/principal.php");
      }
      //echo "ingresaste"; //desde aqui es el ELSE
      else{
        echo "error en la tabla";
      }
      //hasta aqui es el ELSE
    }
    else 
    {
     //header("Location: index.php");
      echo "<script> alert (\"Intenta Nuevamente \"); </script>"; 
      echo "<script language=Javascript> location.href=\"index.php\"; </script>"; 
      echo " OK ";
    }
  
  
  function validarUsuario($usuario, $password, $cargo)
  {
    

    include("conexion.php");
    $consulta = "SELECT ci FROM dat_admin WHERE ci = '$usuario' AND cargo='$cargo' ";
    
    if($resultado = $link->query($consulta)){ 
    
    if($resultado->num_rows > 0)
    {
      $fila = $resultado->fetch_assoc();
      if( strcmp($password,$fila["ci"]) == 0 )
        return true;            
      else          
        return false;
    }
    else
        return false;
  }
}
?> 
