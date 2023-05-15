<!DOCTYPE html>
<html lang="Es">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


  <link rel="stylesheet" href="../library/bootstrap/bootstrap.min.css">

  <title>Examenes</title>

</head>
<body style="background-color: #e9ecef;">
 <!--container -->   
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
          <a class="nav-link" href="../vistas/Comments.php"> <span class="fas fa-home"></span> Inicio
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/Groups.php"><span class="fas fa-users-cog"></span> Grupos</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="../vistas/chat/chat.php"><span class="fas fa-comments"></span> Mensajes</a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-edit"></i> Examenes</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="jefe.php"><i class="fas fa-pencil-alt"></i> Crear Examenes </a>
            <a class="dropdown-item" href="jefe.php"><i class="far fa-file-alt"></i> Ver Examenes</a>
          </div>
        </li>



        <li class="nav-item dropdown">
          <!-- -->
          <div class="btn-group">

           <button type="button" class="dropdown-toggle nav-link btn btn-outline-success" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-cogs"></span>
           </button>
           <div class="dropdown-menu">
             <a class="dropdown-item" href="#"><span class="fas fa-user-circle"></span> Perfil</a>  


             <a class="dropdown-item" href="../vistas/categories.php"><span class="fas fa-box"></span> Categorias</a>

             <div class="dropdown-divider"></div>

             <a class="dropdown-item" href="../vistas/manager.php"><span class="fas fa-box"></span> Repositorio</a>

             <a class="dropdown-item" href="../process/Users/exit.php" style="color:red;"><span class="fas fa-sign-out-alt"></span> Salir</a>
           </div> 
         </div>
       </li>              
     </ul>
   </div>
 </div>
</nav>

<!--nav bar-->

<div class="container">
  <div class="row justify-content-center mt-4">
    <div class="col-12 col-sm-8 col-md-5 my-5 p-4" style="border-radius: 1em; background-image: url('imagenes/fondox.png');">


      <!--desde aqui el FORM-->
<!--desde aqui el FORM-->
<form action="login.php" method="post">
            <div class="input-group mb-1 p-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fal fa-user"></i></span>
                      </div>
                      <input name="usuario" type="password" class="form-control" placeholder="Ingresa tu contraseña" aria-label="Nombre de Usuario" aria-describedby="basic-addon1" style="height: 3.5em;" autofocus required pattern="[0-9]{3,15}">
            </div>
<input type="hidden" name="cargo" value="4">
            <div class="input-group p-3 d-flex justify-content-between">
                      <button type="submit" class="btn btn-success text-white rounded-0" style="height: 3em;"><h5><i class="fal fa-sign-in"></i> Ingresar</h5></button>

            </div>

</div>
</div>  

</div>

<div style="height: 120px;">


    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script defer src="fonts/js/fontawesome-all.js"></script>

</body>

<!-- //Body -->

</html>

<!-- //html -->