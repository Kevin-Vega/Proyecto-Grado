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

<style>

  *{
  margin:0px;
  padding: 0px;
  }
  
  span{
    margin-top: -40px;
    margin-left: -40px;
  }

.container-total{
  background: #E9E9E9;
  margin-left: 250px;
  margin-right: 250px;
  padding-top: 40px;
}

.first{
   background-color:#E9ECEF;
   height: 150px;
   width: 400px; 
   margin-left: 200px;
   padding-top: 5px;
}

.circle-first{
  width:40px;
  height:40px;
  background-color:#55ACCC;
  margin-left:130px;
  padding: 70px;
  border-radius: 50%;
}

.name-first{
  text-align: center;
}


.second{
   background-color:#E9ECEF;
   height: 150px;
   width: 300px; 
   margin-left: 90px;
   padding-top: 40px;
   float:left;
}

.circle-second{
 height: 120px;
  width: 120px;
  background-color:#55ACCC;
  margin-left:90px;
  padding: 50px;
  border-radius: 50%;
}

.name-second{
  text-align: center;
}

.third{
   background-color:#E9ECEF;
   height: 250px;
   width: 300px; 
   margin-left: 10px;
   padding-top: 40px;
   float:left;
}

.circle-third{
  height: 120px;
  width: 120px;
  background-color:#55ACCC;
  margin-left:90px;
  padding: 50px;
  border-radius: 50%;
}

.name-third{
  text-align: center;
}


</style>


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
          <a class="nav-link" href="../Modules.Php"><span class="fas fa-brain"></span> Modulos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><span class="fas fa-chart-line"></span> Estadisticas</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#"><span class="fas fa-comments"></span> Mensajes</a>
        </li>

        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="far fa-edit"></i> Examenes</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="../Exams.php"><i class="fas fa-pencil-alt"></i> Crear Examenes </a>
              <a class="dropdown-item" href="../seeExams.php"><i class="far fa-file-alt"></i> Ver Examenes</a>
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


<div class="container-total">

    <div class="first">
      <div class="sub-first">
        <div class="circle-first">
           <span  id="first" class="fa fa-landmark fa-5x"></<span>
        </div>
        <div class="name-first"><h4>nombre Materia</h4></div>
      </div>
    </div>


    <div class="second">
      <div class="sub-second">
        <div class="circle-second">
           <span id="second" class="fas fa-landmark fa-5x"> </span>
        </div>
        <div class="name-second"><h4>nombre Materia</h4></div>
      </div>
    </div>

    <div class="third">
      <div class="sub-third">
        <div class="circle-third">
           <span id="third" class="fas fa-landmark fa-5x"></span>
        </div>
        <div class="name-third"><h4>nombre Materia</h4></div>
      </div>
    </div>

  </div>


 

  <script src="../library/jquery-3.5.1.min.js"></script>
<script src="../library/bootstrap/popper.min.js"></script>
<script src="../library/bootstrap/bootstrap.min.js"></script>
<script src="../library/sweetalert.min.js"></script>
<script src="../library/dataTable/jquery.dataTables.min.js"></script>
<script src="../library/dataTable/dataTables.bootstrap4.min.js"></script>

 </body>
</html>
