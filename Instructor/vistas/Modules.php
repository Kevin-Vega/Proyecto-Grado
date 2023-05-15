<?php 
session_start();
if(isset($_SESSION['username'])){
	include "header.php";
?>

<div class="jumbotron jumbotron-fluid">
  <div class="container">

<hr>

  	<div class="row">
  		<div class="col-sm-12">
  			<div id="showOptionsModules"></div>
  		</div>
  	</div>   
  </div>
</div>




<?php

	include "footer.php";
?>

<!--funciones js de categorias-->

<script type="text/javascript">
	$(document).ready(function(){
       $('#showOptionsModules').load("modules/showOptionsModules.php");
	});

</script>
<?php	
}else{
	header("location:../Comments.php");
}


 ?>
