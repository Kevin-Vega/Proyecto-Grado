<?php 
//Conexion de Categorias

require_once "Conexion.php";

class Groups extends Conectar{
	public function addGroups($data){
          $conexion = Conectar::conexion();

          $sql = "INSERT INTO groups (codigo_grupo,nombre_grupo,numero_estudiantes,fecha_creacion,nivel_ingles,jornada,estado,semesters_id) VALUES(?,?,?,?,?,?,?,?)";

          $query = $conexion->prepare($sql);

          $query->bind_param("sssssssi",

          	$data['codigo_grupo'],
          	$data['nombre_grupo'],
          	$data['numero_estudiantes'],
          	$data['fecha_creacion'],
          	$data['nivel_ingles'],
          	$data['jornada'],
          	$data['estado'],
          	$data['semesters_id']


      );

          $request = $query->execute();
          $query->close();

          return $request;
	}


}