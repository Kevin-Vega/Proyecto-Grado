<?php 

require_once "../../class/Groups.php";

   $data = array(
   "codigo_grupo" => $_POST['codigo_grupo'],
    "nombre_grupo" =>$_POST['nombre_grupo'],
    "numero_estudiantes" => $_POST['numero_estudiantes'],
    "fecha_creacion" => $_POST['fecha_creacion'],
    "nivel_ingles" => $_POST['nivel_ingles'],
    "jornada" => $_POST['jornada'],
    "estado" => $_POST['estado'],
    "semesters_id" => $_POST['semesters_id']
  
   );

   $groups = new Groups();
    echo $groups->addGroups($data);

 ?>