<?php 
session_start();
if(isset($_SESSION['username'])){
  include "header.php";
  ?>

  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">Biblioteca de Archivos</h1>

      <div class="row">
        <div class="col-sm-4">
          <span class="btn btn-primary" data-toggle="modal" data-target="#modalAddFiles">
            <span class="fas fa-plus-circle"></span> Agregar Archivos
          </span>
        </div>
      </div>

      <hr>

      <div class="row">
        <div class="col-sm-12">
          <div id="tableFiles"></div>
        </div>
      </div>   
    </div>
  </div>


  <!--Modal para agregar archivos en gestor-->
  <div class="modal fade" id="modalAddFiles" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">

          <form id="frmFiles" enctype="multipart/form-data" method="post">
            <label>Categoria</label>
            <div id="CategoriesLoad"></div>

            <label>Selecciona archivos</label>   

            <input type="file" name="Documents[]" id="Documents[]" class="form-control" multiple="">
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary" id="btnSaveFiles">Guardar Cambios</button>
        </div>
      </div>
    </div>
  </div>

  <!-- modal para visualizacion de archivos en gestor -->
  <div class="modal fade" id="seeFiles" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">Archivo</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
        <div class="getFiles">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  <?php include "footer.php"; ?>

  <script type="text/javascript">

    $(document).ready(function(){
     $('#tableFiles').load("manager/table.php");
     $('#CategoriesLoad').load("categories/selectCategories.php");

     $('#btnSaveFiles').click(function(){
      var formData= new FormData(document.getElementById('frmFiles'));
      $.ajax({
        url:  "../process/Manager/saveManager.php",
        type: "POST" ,
        datatype:"html",
        data:formData,
        cache:false,
        contentType:false,
        processData:false,
        success:function(respuesta){
          respuesta = respuesta.trim();
          if(respuesta == 1){

            $('#tableManagerFiles').load("manager/table.php");
            swal(":D","Agregado con exito","success");
          }else{
            swal(":(","Fallo al agregar","error");
          }
        }
      });
    });
   });

 </script>

 <?php

}else{
	header("location:../login.php");
}

?>