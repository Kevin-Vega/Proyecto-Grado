<?php

//para mostrar datos  
session_start();
require_once "../../class/Conexion.php";
$idUsuarios = $_SESSION['idUsuarios'];
$conexion = new Conectar();
$conexion = $conexion->conexion();

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
      <span class="fas fa-book-open fa-5x" style="margin-left: 510px;" ></span></span>
     <h1 style="text-align: center;" class="display-4"> Ver Grupos</h1>

<!--Creacion de tabla Grupos-->
<div class="table-responsive">
  <table class="table table-hover table-dark" id="groupsList">
    <thead style="text-align: center;">
      <th>#</th>
      <th>Codigo</th>
      <th>Nombre Grupo</th>
      <th>Numero Estudiantes</th>
      <th>Fecha Creado</th>
      <th>Nivel Ingles</th>
      <th>Jornada</th>
      <th>Estado</th>
      <th>Eliminar</th>
      <th>Editar</th>
    </thead>

    <tbody>
<?php 
      $sql="SELECT id,codigo_grupo,nombre_grupo,numero_estudiantes,fecha_creacion,nivel_ingles,jornada,estado FROM groups ";

      $result = mysqli_query($conexion,$sql);

//inicio bucle
      while ($show = mysqli_fetch_array($result)){
//concateno con id
        $idGroups = $show['id'];
        ?>

     
        <tr  style="text-align: center;">
          <td><?php echo $show['id']; ?></td>
          <td><?php echo $show['codigo_grupo']; ?></td>
          <td><?php echo $show['nombre_grupo']; ?></td>
          <td><?php echo $show['numero_estudiantes']; ?></td>
          <td><?php echo $show['fecha_creacion']; ?></td>
          <td><?php echo $show['nivel_ingles']; ?></td>
          <td><?php echo $show['jornada']; ?></td>
          <td><?php echo $show['estado']; ?></td>
          <td><span class="btn btn-danger btn-sm"><span class="fas fa-trash-alt"></span></span></td>
          <td><span class="btn btn-warning btn-sm"><span class="fas fas fa-edit"></span></span></td>
        </tr>  
        <?php 
      }
//fin de bucle
      ?>       
    </tbody>
  </table>

</div>
</div>

<script type="text/javascript"> 
  $(document).ready(function(){
    $('#groupsList').DataTable();
  });
</script>



<script src="../../library/jquery-3.5.1.min.js"></script>
<script src="../../library/bootstrap/popper.min.js"></script>
<script src="../../library/bootstrap/bootstrap.min.js"></script>
<script src="../../library/sweetalert.min.js"></script>
<script src="../../library/dataTable/jquery.dataTables.min.js"></script>
<script src="../../library/dataTable/dataTables.bootstrap4.min.js"></script>

 </body>
</html>