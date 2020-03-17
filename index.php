<?php
session_start();
// check login
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
echo "<p style=font-size:50px; color:'blue';>Enter Your Values Please!!!</p>";
?>
<html>
    <head>
        <title>Numbers</title>
        <meta charset="UTF-8">
    </head>
    <body>
	<?php include "css.php";?>
	<div class="button">
        <h1><a href="welcome.php">First Page</a>
		<?php echo"<a href='logout.php'>Log Out </a>";?>
		</h1></div>
        <form action="save.php" method="post">
            <input type="text" name="num1" placeholder="Happy  Day 1-100" value="" maxlength="2" style="width:400px;" />
            <br />
            <br />
            <input type="text" name="num2" placeholder="Happy  Night 1-100" value="" maxlength="2" style="width:400px;" />
            <br />
            <br />
			<input type="hidden" name="token" value="<?php echo $_SESSION['token'];?>" maxlength="2" style="width:400px;" />
            <br />
            <br />
            <input type="submit" name="snd"  value="Send"/>
        </form>
    </body>
</html>

