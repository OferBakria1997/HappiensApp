<?php
session_start();
// check login
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
include "db_functions.php";
include "functions1.php";
$mysqli=connect_to_db();
$all_res=get_stats($mysqli);
close_connection_to_db($mysqli);
?>
<html>
    <head>
        <title>the data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	<?php include "css.php";
		$i=1;
        echo "<p style=font-size:35px; color:'blue';>ALL ABOUT ME</p>";?>
		<div class="button">
        <h1><a href="welcome.php">First Page</a>
		<?php echo"<a href='logout.php'>Log Out </a>";?>
		</h1></div>
        <table border="1">
            <tr>
				<th></th>
                <th>Day</th>
                <th>Night</th>
                <th>Happier In The</th>
            </tr>
<?php foreach($all_res as $id=>$data){?>
            <tr>
				<td><?php echo $i++?></td>
                <td><?php echo $data['num1']?></td>
                <td><?php echo $data['num2']?></td>
                <td><?php echo $data['data']?></td>
            </tr>
<?php } ?>
        </table>
    </body>
</html>


