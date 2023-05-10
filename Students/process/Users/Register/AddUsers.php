<?php 

require_once "../../../class/Users.php";

 $password = sha1($_POST['password']);

   $data = array(

   "name" => $_POST['name'],
    "lastname" =>$_POST['lastname'],
    "email" => $_POST['email'],
    "tlf" => $_POST['tlf'],
    "password" => $password,
    "sem_List" => $_POST['sem_List'],
    "groups_code" => $_POST['groups_code']);

   $users = new Users();
    echo $users->addUser($data);

 ?>