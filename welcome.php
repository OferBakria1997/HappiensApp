<?php
session_start();
//var_dump($_SESSION);
// check login
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
if(isset($_GET['puts']))
	header('location: index.php');
if(isset($_GET['his']))
	header('location: month_his.php');
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
			<th colspan="2"><h2 align="center"><?php echo "WELCOME ".$_SESSION['name']."!!";?></h2></th>
			</tr>
			<tr>
			<td>Click-->:</td>
			<td><input type="submit" name="puts" value="Go To Put Values"></td>
			</tr>
			<tr>
			<td>Click-->:</td>
			<td><input type="submit" name="his" value="History Of Last Month "></td>
			</tr>
			<td></td>
			<td><?php echo str_repeat("&nbsp;", 18)."<a href='logout.php'>Log Out </a>"?></td>
			</tr>
			</table>
			</form>
        </div>
            </body>
</html> 
