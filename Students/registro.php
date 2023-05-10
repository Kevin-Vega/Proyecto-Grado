<?php
 require_once "class/Conexion.php"; $conex = new Conectar(); $conexion = $conex->conexion();
?>

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
	select{width: 350px; margin-top: 2px;}
</style>
<body>
	<div class="container">
		<h1 style="text-align: center;">Registro Estudiante</h1>
		<hr>
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4">
		 <form method="post" name="frmRegistro" id="frmRegistro" onsubmit="return AddUsers_New()">

					<label for="name">*Nombres</label>
					<input type="text" name="name" id="name" class="form-control" maxlength="80" required="">
					<label for="lastname">*Apellidos</label>
					<input type="text" name="lastname" id="lastname" class="form-control" maxlength="80" required="">

					<label for="email">*Email</label>
					<input type="email" name="email" id="email" class="form-control" required="" >

					<label for="tlf">Telefono</label>
					<input type="tel" name="tlf" id="tlf" class="form-control" maxlength="10">

					<label for="password">*Password</label>
					<input type="password" name="password" id="password" class="form-control" maxlength="80" required="">


		<!-- traer datos de semestre -->
					<label for="sem_List">*Seleccionar Semestre</label>

					<br>
					<?php	
					$sql="SELECT * FROM semesters";
					$result = mysqli_query($conexion,$sql);
					?>

					<select name="sem_List" id="sem_List" required="">

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
					<br>

			<!-- traer Codigo Grupos -->
					<label>*Seleccionar Codigo</label>

					<?php	
					$sql="SELECT * FROM groups";
					$result = mysqli_query($conexion,$sql);
					?>

					<select id="groups_code" name="groups_code" required="">

						<?php 
						while($show = mysqli_fetch_array($result)){
							$id = $show['id'];
						?>

					<option  value="<?php echo $id; ?>"><?php echo $show['codigo_grupo']; ?></option>

					<?php 
						}
						?>
					</select>
					<br>
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