<?php
include "css.php";
include "functions1.php";
$name=addslashes((isset ($_GET['name']))? $_GET['name']:"");
$email=addslashes((isset($_GET['email']))? $_GET['email']:"");
$uname=addslashes((isset ($_GET['uname']))? $_GET['uname']:"");
$pass=addslashes((isset($_GET['pass']))? $_GET['pass']:"");
if(isset($_GET['snd'])){
include_once 'class_dbMain_conn.php';
$dbMain_conn=new dbMain_conn();
$mysqli=$dbMain_conn->create_link();

include_once 'class_user_mngr.php';
$u=new user_mngr($mysqli);
if(!($u->exists($email)))
	echo"<script>alert('Email Already Exists!')</script>";
else{
	echo"<script>alert('You succesfully regester')</script>";
$pass=$u->encryption($pass);
$u->register($name,$email,$uname,$pass);
}
}
if(isset($_GET['login'])){
	header ('location:login.php');
	}

?>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
	<?php include "css.php";?>
                <div id="reg_form">
            <form method="get" action="">
			<table align="center">
			<tr>
			<th colspan="2"><h2 align="center">Login</h2></th>
			</tr>
			<tr>
			<td>Name:</td>
			<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
			<td>User Name:</td>
			<td><input type="text" id="uname" name="uname"></td>
			</tr>
			<tr>
			<td>E-mail:</td>
			<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
			<td>password:</td>
			<td><input type="text" id="pass" name="pass"></td>
			</tr>
			<tr>
			<td align="right" colspan="2" ><input type="submit" name="snd" value="sign up"></td>
			</tr>
			<tr>
			<td align="right" colspan="2" ><input type="submit" name="login" value="login"></td>
			</tr>
			</table>
			</form>
        </div>
            </body>
</html> 