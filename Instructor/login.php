<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/login.css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
 <link rel="icon" type="image/png" href="icon/logo.png">


 <title>Login</title>
</head>
<body>
	<div class="wrapper fadeInDown">
    <div id="formContent">
      <!-- Tabs Titles -->

      <!-- Icon -->
      <div class="fadeIn first">
        <img src="img/logo.jpg" id="icon" alt="User Icon" />
        <h1>Fangus Instructor</h1>
      </div>

      <!-- Login Form -->
      <form method="post" id="frmLogin" onsubmit="return logear()">

        <input type="text" id="email" class="fadeIn second" name="email" placeholder="Email" required="">

        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Password" required="">

        <input type="submit" class="fadeIn fourth" value="Login" name="login">
      </form>


         <!-- Forget Password-->
      <div id="formFooter">
        <a class="underlineHover" href="#">¿Olvidó su Contraseña?</a>
      </div>

      <!-- Register -->
      <div id="formFooter">
        <a class="underlineHover" href="registro.php">Registrar</a>
      </div>

    </div>
  </div>

  <script src="library/sweetalert.min.js"></script>
  <script src="library/jquery-3.5.1.min.js"></script>

  <script type="text/javascript">
    function logear(){

      $.ajax({
        type:"POST",
        data:$('#frmLogin').serialize(),
        url:"process/Users/Login/Login.php",
        success:function(respuesta){

          respuesta = respuesta.trim();

          if(respuesta == 1){
            window.location ="vistas/comments.php";

          }else{
            swal(":(","Fallo al ingresar","error");
          }

        }

      });

      return false;

    }

  </script>



</html>