<?php 

session_start();

require_once "../../../class/Users.php";

$email = $_POST['email'];
$password = sha1($_POST['password']);


$usersObj = new Users();

echo $usersObj->login($email,$password);


 ?> 
