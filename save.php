<?php
session_start();
// check login
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
if(isset($_POST['snd'])and ($_POST['token']==$_SESSION['token'])){
include "db_functions.php";
include "functions1.php";
$mysqli=connect_to_db();
$num1 = (isset($_POST['num1']))?$_POST['num1']:-1;
$num2 = (isset($_POST['num2']))?$_POST['num2']:-1;
$query=save_to_db($mysqli,$num1,$num2);
close_connection_to_db($mysqli);
header("location: show.php");
}
?>
