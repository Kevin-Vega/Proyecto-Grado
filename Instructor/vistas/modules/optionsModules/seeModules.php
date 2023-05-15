<style>
	*{
	margin:0px;
	padding: 0px;
	}

	header{
		background-color: #55ACCC;
		height: 100px;
	}

	body{
		background: #3B3B3B;
	}

.container-total{
	background: #E9E9E9;
	height: 1200px;
	margin-left: 250px;
	margin-right: 250px;
	padding-top: 40px;
}

.first{
   background-color:#E9E9E9;
   height: 150px;
   width: 400px; 
   margin-left: 200px;
   padding-top: 20px;
}

.circle-first{
  width:30px;
  height:30px;
  background-color:#55ACCC;
  margin-left:130px;
  padding: 50px;
  border-radius: 50%;
}

.circle-first a{
  color:#fff;
 
  padding:10px 15px 30px 5px;
}



.name-first{

	text-align: center;
}


.second{
   background-color:#E9E9E9;
   height: 150px;
   width: 300px; 
   margin-left: 90px;
   padding-top: 40px;
   float:left;
}

.circle-second{
  width:30px;
  height:30px;
  background-color:#55ACCC;
  margin-left:90px;
  padding: 50px;
  border-radius: 50%;
}

.circle-second a{
  color:#fff;
 
  padding:10px 15px 30px 5px;
}



.name-second{

	text-align: center;
}

.third{
   background-color:#E9E9E9;
   height: 150px;
   width: 300px; 
   margin-left: 10px;
   padding-top: 40px;
   float:left;
}

.circle-third{
  width:30px;
  height:30px;
  background-color:#55ACCC;
  margin-left:90px;
  padding: 50px;
  border-radius: 50%;
}

.circle-third a{
  color:#fff;
 
  padding:10px 15px 30px 5px;
}



.name-third{

	text-align: center;
}


</style>


	<div class="container">

		<div class="first">
			<div class="sub-first">
				<div class="circle-first">
					 <h1 class="fas fa-landmark"></h1>
				</div>
				<div class="name-first"><h4>este es un texto</h4></div>
			</div>
		</div>


		<div class="second">
			<div class="sub-second">
				<div class="circle-second">
					 <h1 class="fas fa-landmark"> </h1>
				</div>
				<div class="name-second"><h4>este es un texto</h4></div>
			</div>
		</div>

		<div class="third">
			<div class="sub-third">
				<div class="circle-third">
					 <h1 class="fas fa-landmark"> </h1>
				</div>
				<div class="name-third"><h4>este es un texto</h4></div>
			</div>
		</div>

	</div>

	  <script type="text/javascript">
        $(document).ready(function(){
          $('#showSeeModules').load();
        });
      </script>


