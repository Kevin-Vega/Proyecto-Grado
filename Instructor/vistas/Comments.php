<?php 

session_start();
if(isset($_SESSION['username'])){
	include "header.php";
 error_reporting(0);//temporal usado para oculatr errores
	?>


	<div class="jumbotron jumbotron-fluid">
		<div id="designComments">
			<!-- contenido de imagen perfil -->
<div style="float:left; width: 90px; border-radius:5px solid; margin-left: 70px;">
  <div style="display: inline-block; position: relative; width: 100px; height: 100px; overflow: hidden;border-radius: 50%;">                             
	<img style="width: auto; height: 100%; margin-left: -50px;" src="comments/imagenes/descarga.jpg" alt="No encontrada">
  </div>
	<div style="text-align: center;">
		<a href="">Perfil</a>
	</div>
</div>

<div class="table-responsive" style="float: left; margin-left:-60px; margin-top: -155px;">
	<form method="post" enctype="multipart/form-data" name="form1">

     

		<label for="area_comentarios"></label>
		<center>
			<textarea name="area_comentarios" cols="80" rows="5" id="area_comentarios" placeholder="Escribir..."></textarea>
			<br>	

			<input type="hidden" name="MAX_TAM" value="2097152">

			<input type="file" name="imagen" id="imagen " style="margin-left: 0px;">

<input class="btn btn-primary" type="submit" name="btn_enviar" id="btn_enviar" value="Publicar" style="margin-left: 130px;">

		</center>
	</form>

	<p>&nbsp;</p>
<div style="background: white; width: 800px; margin-left: 270px;">

  <?php 

$conexion=mysqli_connect("localhost","root","","makedeve_fangusins");

//comprobar conexion
if(!$conexion){

  echo "ha habido un error al conectar la base de datos".mysqli_error();
   exit();
}

// $_FILES

if($_FILES['imagen']['error']){

  switch($_FILES['imagen']['error']){

    case 1: //error exceso tamaño archivo
     echo "El tamaño del archivo excede  lo permitido  por el servidor";

     break;

     case 2: // error archivo marcado formulario

      echo "El tamaño del archivo excede las dos megas";
         break;


         case 3: // corrupcion del archivo

         echo"el envio del archivo de interrumpió";
         break;

         case 4: //No hay archivo

         echo"no se ha enviado ningun archivo";
         break;
  }
}else{

 echo "Entrada  Subido correctamente";
 if(isset($_FILES['imagen']['name']) && ($_FILES['imagen']['error'] == UPLOAD_ERR_OK)){

  $destino_ruta = 'comments/imagenes/';

  move_uploaded_file($_FILES['imagen']['tmp_name'],$destino_ruta.$_FILES['imagen']['name']);

  echo "El archivo".$_FILES['imagen']['name']. "se ha copiado en el directorio de imagenes";

 }else{

  echo "el archivo no se ha podido copiar al directorio de imagenes";
 }

}


$elcomentario= $_POST['area_comentarios'];

$laimagen=$_FILES['imagen']['name'];




$miconsulta="INSERT INTO contenidos (Comentario,Imagen) VALUES ('".$elcomentario."','".$laimagen."')";

$resultado = mysqli_query($conexion, $miconsulta);

//cierre de conexion

mysqli_close($conexion);

echo"se ha agregado el comentario con exito. <br>";

   ?>

  <hr>

  <?php 

     $conexion=mysqli_connect("localhost","root","","makedeve_fangusins");

//comprobar conexion
if(!$conexion){

  echo "ha habido un error al conectar la base de datos".mysqli_error();
   exit();
}

$miconsulta = "SELECT * FROM contenidos ORDER BY  Fecha  DESC";

if($resultado = mysqli_query($conexion, $miconsulta)){
 

  while($registro = mysqli_fetch_assoc($resultado)){


    echo "<h4>". $registro['Fecha']. "</h4>";

    echo "<div style='width:400px'>".$registro['Comentario']."</div><br>";

    if($registro['Imagen'] != ""){

       echo "<img src='comments/imagenes/" . $registro['Imagen']. "' width='300px'/>"; 

      }

      echo "<hr>";
  }
}



   ?>
   
</div>
</div>


		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					
				</div>
			</div>
			<hr>
			<div class="row">
				<div class="col-sm-12">
				</div>
			</div>   
		</div>
	</div>


	<?php

	include "footer.php";
	?>


	<?php

}else{
	header("location:../login.php");
}


?>