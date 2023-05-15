<?php

//para mostrar datos  
session_start();
require_once "../../class/Conexion.php";
$idUsuarios = $_SESSION['idUsuarios'];
$conexion = new Conectar();
$conexion = $conexion->conexion();

?>
<!--Creacion de tabla Categorias-->
<div class="table-responsive">
	<table class="table table-hover table-dark" id="tableCategoriesDataTable">
		<thead style="text-align: center;">
			<th>Nombre</th>
			<th>Fecha</th>
			<th>Editar</th>
			<th>Eliminar</th>
		</thead>

		<tbody>
			<?php 
			$sql="SELECT id,categoria,fechaInsert FROM categories WHERE user_id = '$idUsuarios'";

			$result = mysqli_query($conexion,$sql);

//inicio bucle
			while ($show = mysqli_fetch_array($result)){
//concateno con id
				$idCategories = $show['id'];
				?>

				<tr  style="text-align: center;">
					<td><?php echo $show['categoria']; ?></td>
					<td><?php echo $show['fechaInsert']; ?></td>
					<td>
						<span class="btn btn-warning btn-sm" onclick="getDataCategories('<?php echo $idCategories; ?>')"
							data-toggle="modal" data-target="#modalUpdateCategories">
							<span class="fas fa-edit"></span>
						</span>
					</td>
					<td>
						<span class="btn btn-danger btn-sm" onclick="deleteCategories('<?php echo $idCategories; ?>')">
							<span class="fas fa-trash-alt"></span>
						</span>
					</td>
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
		$('#tableCategoriesDataTable').DataTable();
	});
</script>