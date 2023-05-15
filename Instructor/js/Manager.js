function addManager(){
	var formData= new FormData(document.getElementById('frmFiles'));
	$.ajax({
		url:"../process/Manager/saveManager.php",
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
				swal(":(","Fallo al agregar","Error");
			}
		}
	});
}

function deleteManger(idFiles){
	swal({
		title: "¿Seguro que deseas eliminarlo?",
		text: "Una vez eliminado no podras recuperarlo",
		icon: "warning",
		buttons: true,
		dangerMode: true,
	})
	.then((willDelete) => {
		if (willDelete) {
			$.ajax({
				type:"POST",
				data:"idFiles="+ idFiles,
				url:"../process/Manager/deleteManger.php",
				success:function(respuesta){
					respuesta = respuesta.trim();


					if(respuesta ==1){

						$('#tableManagerFiles').load("manager/table.php");
						swal("Tu archivo ha sido eliminado",{
							icon:"success",
						});

					}else{

						swal("No se ha podido eliminar",{
							icon:"error",
						});
					}
				}
			});
		}
	});
}


function getFilesId(idFiles){

	$.ajax({
		type:"POST",
	    data:"idFiles="+ idFiles,
		url: "../process/Manager/getManager.php",
		success:function(respuesta){
			respuesta= respuesta.trim();
			if(respuesta == 1){
				$('#getFiles').html(respuesta);
			}else{

			}
		}
	});
   
}

