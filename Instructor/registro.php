<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="library/bootstrap/bootstrap.min.css">
     <link rel="icon" type="image/png" href="icon/logo.png">
</head>
<style>
	*{margin:0px;padding: 0px;}
	hr{margin-left: 370px; width:400px;}
</style>
<body>
	<div class="container">
		<h1 style="text-align: center;">Registro Instructor</h1>
		<hr>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
		 <form method="post" name="frmRegistro" id="frmRegistro" onsubmit="return AddUsers_New()">

					<label for="name">*Nombres</label>
					<input type="text" name="name" id="name" class="form-control" maxlength="80" required="">
					<label for="lastname">*Apellidos</label>
					<input type="text" name="lastname" id="lastname" class="form-control" maxlength="80" required="">

					<label for="bthday">*Fecha de Nacimiento</label>
					<input type="date" name="bthday" id="bthday" class="form-control" required="" value="1960-01-01" min="1960-01-01"  max="2005-12-31">

					<label for="email">*Email</label>
					<input type="email" name="email" id="email" class="form-control" required="" >

					<label for="tlf">Telefono</label>
					<input type="tel" name="tlf" id="tlf" class="form-control" maxlength="10" >

					<label for="pfs">*Profesion</label>
					<input type="text" name="pfs" id="pfs" class="form-control" placeholder="Ejemplo: Ing.Motores"required="" >

					<label for="password">*Password</label>
					<input type="password" name="password" id="password" class="form-control" maxlength="80" required="">
					<br>

					<div class="row">
                        <div class="col-sm-6 text-left">
						<a href="login.php" class="btn btn-success">Login</a>
						</div>


						<div class="col-sm-6 text-right">
						<button class="btn btn-primary">Regisrar</button>
						</div>
					
						
					</div>
				</form>
			</div>
			<div class="col-sm-4"></div>
			
		</div>
	</div>

    <script src="library/jquery-3.4.1.min.js"></script>
	<script src="library/sweetalert.min.js"></script>
	<script type="text/javascript">

		function AddUsers_New(){
             $.ajax({

                method: "POST",
                data: $('#frmRegistro').serialize(),
                url: "process/Users/Register/AddUsers.php",
                success:function(respuesta){

                respuesta = respuesta.trim();

                	if(respuesta == 1){

                		$("#frmRegistro")[0].reset();

                		swal(":D","¡Registro Exitoso!","success");

                	}else if(respuesta == 2){
                    swal("Este Email ya existe,escribe uno valido");
                  }else{
                		swal(":(","Fallo al Registrar","error");
                	}

                }
             });

             return false;
		}
	</script>
</body>
</html