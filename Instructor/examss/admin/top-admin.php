<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Make Develop">

  <title>Bienvenida!</title>
  <link rel="stylesheet" href="../../library/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="../../library/fontawesome/css/all.css">
  <link rel="stylesheet" href="../../library/dataTable/dataTables.bootstrap4.min.css">
 <!-- Bootstrap core CSS -->
    <link rel="icon" href="../favicon.ico" type="image/x-icon" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../fonts/css/fontawesome-all.css" crossorigin="anonymous">
    <script defer src="../fonts/js/fontawesome-all.js"></script>
    <!-- Custom styles for this template -->
    <link href="starter-template.css" rel="stylesheet">
    <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>

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
          <a class="nav-link" href="../../vistas/Comments.php"> <span class="fas fa-home"></span> Inicio
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../vistas/Groups.php"><span class="fas fa-users-cog"></span> Grupos</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="../../vistas/chat/chat.php"><span class="fas fa-comments"></span> Mensajes</a>
        </li>


        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-edit"></i> Examenes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../../examss/admin/eva_nueva.php"><i class="fas fa-pencil-alt"></i> Crear Examenes </a>
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
       
       
       <a class="dropdown-item" href="../../vistas/categories.php"><span class="fas fa-box"></span> Categorias</a>

       <div class="dropdown-divider"></div>

       <a class="dropdown-item" href="../../vistas/manager.php"><span class="fas fa-box"></span> Repositorio</a>

       <a class="dropdown-item" href="../../process/Users/exit.php" style="color:red;"><span class="fas fa-sign-out-alt"></span> Salir</a>
       </div> 
       </div>
       </li>              
      </ul>
    </div>
  </div>
</nav>

<div class="container">