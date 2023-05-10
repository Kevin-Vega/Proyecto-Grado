<?php 

require_once "../../../class/Users.php";

 $password = sha1($_POST['password']);

   $data = array(

   "name" => $_POST['name'],
    "lastname" =>$_POST['lastname'],
    "bthday" => $_POST['bthday'],
    "email" => $_POST['email'],
    "tlf" => $_POST['tlf'],
    "pfs" => $_POST['pfs'],
    "password" => $password
   );

   $users = new Users();
    echo $users->addUser($data);

 ?>