<?php
session_start();
include 'class_user_mngr.php';
include 'class_dbMain_conn.php';
$dbMain_conn=new dbMain_conn();
$mysqli=$dbMain_conn->create_link();
$user_mngr=new user_mngr($mysqli);	
$user_mngr=new user_mngr($mysqli);
if(isset($_SESSION['id'])){
	$id=(isset($_SESSION['id']))?$_SESSION['id']:"-1";
	if($user_mngr->get_name($id))
		header('location:welcome.php');
	else 
		header('location:login.php');
}
else if(isset($_COOKIE['saveid']))
{
	$id=(isset($_COOKIE['saveid']))?$_COOKIE['saveid']:"-1";
	if($user_mngr->get_id_tochecklogin($id))
	header('location:welcome.php');
else 
	header('location:login.php');
}
else if(isset($_GET['sign_up'])){
	header('location: regester.php');
}
else if(isset($_GET['login']))
{
	$email=(isset($_GET['email']))? $_GET['email']:"-1";
	$pass=(isset($_GET['pass']))? $_GET['pass']:"-1";
	$email=addslashes($email);
	$pass=$user_mngr->encryption($pass);
	$user_mngr->lgn($email,$pass);
}
?>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body>
	<?php include "css.php";?>
                <div id="login_form">
            <form method="get" action="">
			<table align="center">
			<tr>
			<th colspan="2"><h2 align="center">Login</h2></th>
			</tr>
			<tr>
			<td>E-mail:</td>
			<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
			<td>Password:</td>
			<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr><td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td></tr>
			<tr>
			<td align="right" colspan="2" ><input type="submit" name="login" value="Login"></td>
			</tr>
			<tr>
			<td align="right" colspan="2" ><input type="submit" name="sign_up" value="Sign Up"></td>
			</tr>
			</table>
			</form>
        </div>
            </body>
</html> 