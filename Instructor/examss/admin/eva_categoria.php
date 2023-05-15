<?php
  include("../sesion.class.php");

$sesion=new sesion();
$cargo=$sesion->get("cargo");
$usuario=$sesion->get("usuario");
if ($cargo=='4') {
  
include("top-admin.php");
?>
<div class="row d-flex justify-content-between">
<div class="col-md-5">


<h2>Lista de Categorías</h2>
<table class="table table-striped table-bordered table-hover">
<form action="eva_categoriax.php" method="post" >
    <tr class="success">
      <td>N#</td>
      <td>Lista de Categorias</td>
    </tr>
<?php 
include("../conexion.php");

$consulta="SELECT * FROM categoria ";
if ($resultado=$link->query($consulta)) {
$numero=1;
    while ($row=$resultado->fetch_array()) {
        $id=$row['id'];
        $categoria=$row['categoria'];

    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$categoria."</td>";
    echo "</tr>";       
$numero++;
    }
}




 ?>    
    </form>
</table>

</div>

<div class="col-md-5">
<h2>Nueva Categoría</h2>
<table class="table table-striped table-bordered table-hover">
<form action="eva_categoriax.php" method="post" >
    <tr>
      <td>Escriba la nueva Categoría</td>
      <td><input type="text" name="categoria" class="form-control" ></td>
    </tr>
     <tr>
        <td></td>
         <td><button type="submit" class="btn btn-success glyphicon glyphicon-plus-sign"> CREAR</button></td>
     </tr>
</form>
</table>
</div>

</div><!--cierra el ROW-->
<?php
include("footer-admin.php");

}else{
  echo "No eres Administrador y No tienes Permiso para ver esta pagina ";
  echo "<a href='index.php'> REGRESAR </a>";
}
?> 