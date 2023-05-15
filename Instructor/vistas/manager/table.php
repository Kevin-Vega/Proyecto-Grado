<?php

//para mostrar datos  
session_start();
require_once "../../class/Conexion.php";
$idUsuarios = $_SESSION['idUsuarios'];
$conexion = new Conectar();
$conexion = $conexion->conexion();

?>
<div class="table-responsive">	
	    <table class="table table-hover table-dark" id="tableManagerFiles">
         <thead>
         	<tr style="text-align:center;">
         		<th>Nombre</th>
         		<th>Tipo Archivo</th>
         		<th>Descargar</th>
         		<th>Visualizar</th>
         		<th>Eliminar</th>
         	</tr>
         </thead>
         <tbody>
<?php 
/***************************************************
Arreglo de extendiones validas
*****************************************************/

$ValueExtends = array('png','jpeg','pdf','mp3','mp4');

      $sql="SELECT * FROM files WHERE user_id = '$idUsuarios' ";

      $result = mysqli_query($conexion,$sql);

//inicio bucle
      while ($show = mysqli_fetch_array($result)){
         $dirDownload= "../../documents".$idUsuarios."/" . $show['nombre'];
          $NameDownload = $show['nombre'];
          $idFiles = $show['id'];
//concateno con id

        ?>
         	<tr style="text-align:center;">
         		<td><?php echo $show['nombre']; ?></td>
         		<td><?php echo $show['tipo']; ?></td>
         		<td><a href="<?php echo $dirDownload; ?>"  download="<?php echo $NameDownload; ?>" class="btn btn-success btn-sm"><span class="fas fa-download"></span></a></td>
         <td><span class="btn btn-primary btn-sm" data-toggle="modal" ><span class="fas fa-eye"></span></span>  

</td>
         		<td><span class="btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></span></td>
         	</tr>
                    <?php 
      }
//fin de bucle
      ?> 
         </tbody>
	    </table>
	</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tableManagerFiles').DataTable();
	});
</script>
