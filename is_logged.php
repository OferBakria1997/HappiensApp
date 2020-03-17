<?php
function isLogged(){
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
return;
}
?>