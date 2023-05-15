<?php 
session_start();
require_once "../../class/Conexion.php";

$conex = new Conectar();
$conexion = $conex->conexion();

$idUsuarios = $_SESSION['idUsuarios']; 
$sql="SELECT id,categoria FROM categories WHERE user_id ='$idUsuarios'";

$result = mysqli_query($conexion,$sql);

?>

<select name="FilesCategories" id="FilesCategories"class ="form-control">
	<?php 
	while($show = mysqli_fetch_array($result)){
		$idCategories = $show['id'];

		?>

		<option value="<?php echo $idCategories; ?>"><?php echo $show['categoria']; ?></option>

    <?php 
	}
	?>
</select>