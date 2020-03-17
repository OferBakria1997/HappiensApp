<?php
echo" You succesfully logout .click here to login again
		<a href='login.php'>login again </a>";
include "css.php";
session_start();
session_destroy();
if(isset($_COOKIE['uid'])){
	$uid=-1;
	setcookie('uid',$uid,time()-1);
}
	if(isset($_COOKIE['saveid'])){ 
			$saveid=-1;
			setcookie('saveid',$saveid,time()-1);
	}
?>
