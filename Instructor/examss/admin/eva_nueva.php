<?php
include("../sesion.class.php");

$sesion=new sesion();
$cargo=$sesion->get("cargo");
$usuario=$sesion->get("usuario");
if ($cargo=='4') {
  
include("top-admin.php");
?>
<div class="col-md-10" style="margin-top: 60px; margin-left: 90px;">

<div class="table-responsive">

<table class="table table-bordered table-hover">

<form action="eva_nuevax.php" method="post" enctype="multipart/form-data">
  <thead class="bg-secondary text-white">

    <tr>
      <th colspan="4" style="background: #343A40;" ><h3> Formulario de la Evaluación</h3></th>

    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="warning">Categoría:
      <input type="hidden" name="autor" value="<?php echo $usuario;?>">
      <input type="hidden" name="gestion" value="<?php $gestions=date("Y"); echo $gestions;?>">
      </td>
      <td><select name="categoria" class="form-control">
      <option value=" ">Seleccionar</option>
<?php
include("../conexion.php");
//hasta aqui es la variable  
$consulta ="SELECT * FROM categoria ";
if ($resultado=$link->query($consulta)) {
while($row = $resultado->fetch_array()) {
$categoria=$row['categoria'];

echo "<option value=".$categoria.">".$categoria."</option>";

}
}
  ?>
      </select></td>
      <td class="warning">Título:</td>
      <td><input type="text" name="titulo" class="form-control" placeholder="Escriba el Título..." required></td>
</tr>

<tr>
      
        <td class="warning">Estado:</td>
        <td><select name="estado" class="form-control">
          <option value="">Seleccionar</option>
          <option value="Publicado">Publicado</option>
          <option value="Despublicado">No</option>
        </select></td>
        <td class="warning">Semestre:</td>
        <td><select name="bimestre" class="form-control">
          <option value="">Seleccionar</option>
          <option value="Primero">PRIMERO</option>
          <option value="Segundo">SEGUNDO</option>
          <option value="Tercero">TERCERO</option>
          <option value="Cuarto">CUARTO</option>
          <option value="Quinto">QUINTO</option>
        </select></td>
</tr>
<tr>

        <td>Tiempo del Examen:</td>
        <td><select name="tiempo" class="form-control">
          <option value="1">1 - Minutos</option>
          <option value="2">2 - Minutos</option>
          <option value="3">3 - Minutos</option>
          <option value="4">4 - Minutos</option>
          <option value="5">5 - Minutos</option>
          <option value="6">6 - Minutos</option>
          <option value="7">7 - Minutos</option>
          <option value="8">8 - Minutos</option>
          <option value="9">9 - Minutos</option>
          <option value="10">10 - Minutos</option>

        </select></td>
        <td class="danger">Fecha  final del Examen:</td>
        <td><input type="date" name="fecha_final" class="form-control" ></td>
</tr>

    </tbody>
<tr>
  <td colspan="4">
    <a href="index.php"><button type='button' class='btn btn-warning'><i class="fas fa-fast-backward fa-3x"></i></button></a>
    <button type="submit" class="btn btn-success" ><i class="fas fa-save fa-3x"></i> </button></td>
</tr>

  </form>
</table>



</div>
</div>
<?php
include("footer-admin.php");

}else{
  echo "No eres Administrador y No tienes Permiso para ver esta pagina ";
  echo "<a href='index.php'> REGRESAR </a>";
}
?> 