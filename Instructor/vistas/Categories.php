<?php 
session_start();
if(isset($_SESSION['username'])){
	include "header.php";
  ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
     <h1 class="display-4">Categorias</h1>

     <div class="row">
      <div class="col-sm-4">
       <span class="btn btn-primary" data-toggle="modal" data-target="#modalAddCategories">
        <span class="fas fa-plus-circle"></span> Agregar Nueva Categoria
      </span>
    </div>
  </div>

  <hr>

  <div class="row">
    <div class="col-sm-12">
     <div id="tableCategories"></div>
   </div>
 </div>   
</div>
</div>



<!-- Modal -->
<div class="modal fade" id="modalAddCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nombre</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmCategories">
        	<label>Nombre de la Categoria</label>
        	<input type="text" name="nameCategories" id="nameCategories" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary" id="btnSaveCategories">Guardar</button>
      </div>
    </div>
  </div>
</div>


<!-- Button trigger modal para actualizar categorias -->
<!-- Modal -->
<div class="modal fade" id="modalUpdateCategories" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualizar</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="frmUpdateCategories">
          <input type="text" id="idCategories" name="idCategories" hidden="">
          <label>Categoria</label>
          <input type="text" id="updateCategories" name="updateCategories" class="form-control">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-warning" id="btnUpdateCategories">Guardar Cambios</button>
      </div>
    </div>
  </div>
</div>
<?php

include "footer.php";
?>

<!--funciones js de categorias-->
<script src="../js/Categories.js"> </script>

<script type="text/javascript">
	$(document).ready(function(){
   $('#tableCategories').load("categories/tableCategories.php");
   $('#btnSaveCategories').click(function(){
    addCategories();
  });

   $('#btnUpdateCategories').click(function(){
    updateCategories();
  });
 });

</script>
<?php	
}else{
	header("location:../login.php");
}


?>

