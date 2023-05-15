//funcion de validacion para agregar categoria en el sistema de archivos

function addCategories() {
	 var Categories = $('#nameCategories').val();
         if(Categories == ""){
         	swal("Debes agregar una categoria");
         	return false;
         }else{
         	$.ajax({

         		type:"POST",
         		data:"Categories=" + Categories,
         		url:"../process/Categories/addCategories.php",
         		success:function(respuesta){
         			respuesta = respuesta.trim();

         			if(respuesta == 1){
                $('#tableCategories').load("categories/tableCategories.php");
         				$('#nameCategories').val("");
         				swal(":D","Agregado con exito","success");
         			}else{
         				swal(":(","Fallo al agregar","error");
         			}
         		}

         	}); 
         }
}



//eliminar Categorias

function deleteCategories(idCategories){
idCategories = parseInt(idCategories);

if(idCategories < 1){
     swal("No tienes id de Categorias");
     return false;
  }else{
      //*********************************************

      swal({
        title: "¿Realmente quieres eliminarlo?",
        text: "Una vez elimanado, no podras recuperarlo",
        icon: "warning",
        buttons: true,
        dangerMode: true,
     })
      .then((willDelete) => {
       if (willDelete) {
        $.ajax({

         type:"POST",
         data:"idCategories= " + idCategories,
         url:"../process/Categories/deleteCategories.php",
         success:function(respuesta){
            respuesta = respuesta.trim();

            if(respuesta == 1){
               $('#tableCategories').load("categories/tableCategories.php");

               swal("Eliminado con exito", {
                  icon: "success",
               });
            }else{
               swal(":(","Fallo al eliminar","error");
            }
         }


      });
     } 
  });

      //*****************************************
   }
}



//***************************************

function getDataCategories(idCategories){
  $.ajax({

    type:"POST",
    data:"idCategories=" + idCategories,
    url:"../process/Categories/getCategories.php",
    success:function(respuesta){

        respuesta = jQuery.parseJSON(respuesta);
        
       $('#idCategories').val(respuesta['idCategories']);
       $('#updateCategories').val(respuesta['nameCategories'])

    }
  });

}
//***************************************

//Actualizar datos

function updateCategories(){
  if($('#updateCategories').val()==""){
    swal("No hay categoria");
    return false;
  }else{
    $.ajax({

      type:"POST",
      data:$('#frmUpdateCategories').serialize(),
      url:"../process/Categories/updateCategories.php",
      success:function(respuesta){
        respuesta = respuesta.trim();

        if(respuesta == 1){
          $('#tableCategories').load("categories/tableCategories.php");
          swal(":D","Exito al actualiizar","success");
        }else{
          swal(":(","No se ha podido actualizar","error");
        }
      }

    });
  }
}