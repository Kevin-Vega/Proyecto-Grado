<?php
 require_once "../../class/Conexion.php"; $conex = new Conectar(); $conexion = $conex->conexion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bienvenida!</title>
    <link rel="stylesheet" href="../../library/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../library/fontawesome/css/all.css">
  <link rel="stylesheet" href="../../library/dataTable/dataTables.bootstrap4.min.css">

  <style>
    *{margin:0;padding: 0; }
    form{ height: 400px;}
    input[type=text],input[type=date],select{width: 200px; height:30px; margin-top: 5px;}
    label{width: 200px;margin-left: 350px;}
    input[type=submit]{margin-left: 330px; margin-top: 20px; width:80px;}
    input[type=number]{width: 40px;}

  </style>

</head>


<body style="background-color: #e9ecef;">
  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="../img/logo1.png" alt="" width="50px">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">

          <li class="nav-item active">
            <a class="nav-link" href="../Comments.php"> <span class="fas fa-home"></span> Inicio
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../Groups.php"><span class="fas fa-users-cog"></span> Grupos</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="../chat/chat.php"><span class="fas fa-comments"></span> Mensajes</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-edit"></i> Examenes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../../examss/jefe.php"><i class="fas fa-pencil-alt"></i> Crear Examenes </a>
              <a class="dropdown-item" href="../../examss/jefe.php"><i class="far fa-file-alt"></i> Ver Examenes</a>
            </div>
          </li>



          <li class="nav-item dropdown">
            <!-- -->
            <div class="btn-group">

             <button type="button" class="dropdown-toggle nav-link btn btn-outline-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cogs"></span>
             </button>
             <div class="dropdown-menu">
               <a class="dropdown-item" href="#"><span class="fas fa-user-circle"></span> Perfil</a>  


               <a class="dropdown-item" href="../categories.php"><span class="fas fa-box"></span> Categorias</a>

               <div class="dropdown-divider"></div>

               <a class="dropdown-item" href="../manager.php"><span class="fas fa-box"></span> Repositorio</a>

               <a class="dropdown-item" href="../../process/Users/exit.php" style="color:red;"><span class="fas fa-sign-out-alt"></span> Salir</a>
             </div> 
           </div>
         </li>              
       </ul>
     </div>
   </div>
 </nav>

 <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <span class="fas fa-user-friends fa-5x" style="margin-left: 510px;" ></span></span>
    <h2 style="text-align: center;" class="display-6"> Crear Grupos</h2>

    <form method="post" name="frmGroups" id="frmGroups">
      <label for="codigo_grupo"><strong>Código del grupo:</strong></label>
      <input type="text" required="" name="codigo_grupo" id="codigo_grupo">
      <br>
      <label for="nombre_grupo"><strong>Nombre del Grupo:</strong></label>
      <input type="text" required="" id="nombre_grupo" name="nombre_grupo">
      <br>
      <label for="numero_estudiantes"><strong>Numero Estudiantes:</strong></label>
      <input type="Number" min="0" max="30" maxlength="2" value="1" required="" name="numero_estudiantes" id="numero_estudiantes">
      <br>
      <label for="fecha_creacion"><strong>Fecha Actual:</strong></label>
      <input type="date" required="" name="fecha_creacion" id="fecha_creacion"> 
      <br>
      <label><strong>Nivel de Ingles:</strong></label>
      <select required="" name="nivel_ingles" id="nivel_ingles">
        <option value="0"> Seleccione </option>
        <option value="A">A</option>
        <option value="B">B</option>
      </select>  
      <br>
      <label><strong>Jornada:</strong></label>
      <select  required="" name="jornada" id="jornada">
        <option value="0"> Seleccione </option>
        <option value="dia">Dia</option>
        <option value="tarde">Tarde</option>
        <option value="noche">Noche</option>
      </select>
      <br>

      <label for=""><strong>Estado:</strong></label>
      <select required="" name="estado" id="estado">
        <option value="0"> Seleccione </option>
        <option value="Activado">Activado</option>
        <option value="Inactivo">Inactivado</option>
      </select>

  <!-- traer datos de semestre -->
          <label for="semesters_id"><strong>Seleccionar Semestre</strong> </label>
          <?php 
          $sql="SELECT * FROM semesters";
          $result = mysqli_query($conexion,$sql);
          ?>

          <select name="semesters_id" id="semesters_id" required="">

            <?php 
            while($show = mysqli_fetch_array($result)){
              $id = $show['id'];
            ?>

          <option  value="<?php echo $id; ?>"><?php echo $show['numero_semestre']; ?></option>

          <?php 
            }
            ?>
          </select>

      <br>
      <a href="../Groups.php" class="btn btn-primary" style="margin-top: 20px; margin-left: 340px;">Volver </a>

      <input type="submit" value="Guardar" class="btn btn-success">
    </form>


  </div>
</div>




<?php 

include('../footer.php');
?>
<script src="../../library/jquery-3.4.1.min.js"></script>
<script src="../../library/sweetalert.min.js"></script>

<script type="text/javascript">

    function AddGroups_New(){
             $.ajax({

                method: "POST",
                data: $('#frmGroups').serialize(),
                url: "../../process/Groups/AddGroups.php",
                success:function(respuesta){

                respuesta = respuesta.trim();

                  if(respuesta == 1){

                    $("#frmGroups")[0].reset();

                    swal(":D","¡Exito al crear!","success");

                  }else if(respuesta == 2){
                    swal("Este grupo ya existe");
                  }else{
                    swal(":(","Fallo al Registrar","error");
                  }

                }
             });

             return false;
    }
  </script>

</body>
</html>