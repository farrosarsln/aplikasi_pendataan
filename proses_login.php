<?php
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

if($username == "admin" && $password == "admin"){
	$_SESSION['username'] = $username;
	header("location:admin.php");
}else{
	header("location:login.php");
}
?>