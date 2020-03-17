
<?php
session_start();
// check login
$id=(isset($_SESSION['id']))? $_SESSION['id']:0;
if($id<1)
	header('location:login.php');
include"functions1.php";
include "css.php";
include"db_functions.php";
$all_res=get_his(connect_to_db())
?>
<html>
    <head>
        <title>your data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
	<?php include "css.php";
		$i=1;
		//echo date("Y-m-d")."    TO   ".date('Y-m-d',strtotime('-30 days'));
        echo "<p style=font-size:35px; color:'blue';>Last Month</p>"?>
		<div class="button">
        <h1><a href="welcome.php">First Page</a>
		<?php echo"<a href='logout.php'>Log Out </a>";?>
		</h1></div>
        <br/>
        <table border="1">
		<tr><?php echo date('Y-m-d',strtotime('-30 days'))."    TO   ".date("Y-m-d")?></tr>
            <tr>
			<th> </th>
                <th>day</th>
                <th>night</th>
                <th>happier in the</th>
				<th>date</th>
            </tr>
<?php foreach($all_res as $id=>$data){?>
            <tr><?php if($data['date']<=date("Y-m-d") and date($data['date']>=date('Y-m-d',strtotime('-30 days')))){?>
               <td><?php echo $i++?></td>
   			   <td><?php echo $data['num1']?></td>
                <td><?php echo $data['num2']?></td>
                <td><?php echo $data['data']?></td>
				<td><?php echo $data['date']?></td>
            </tr>
			<?php } ?>
<?php } ?>
        </table>
    </body>
</html>