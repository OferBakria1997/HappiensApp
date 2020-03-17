<?php
function save_to_db($mysqli,$num1,$num2){
	session_start();
	$datee=date("Y-m-d");
	$id=$_SESSION['id'];
    $query="INSERT INTO information(`num1`,`num2`,`manuy_id`,`date_in`) VALUES ('$num1','$num2','$id','$datee')";
    $result = mysqli_query($mysqli,$query);
	
	if(!$result)
		return false;
	return true;
}

function get_stats($mysqli){
	$id=$_SESSION['id'];
    $query = "SELECT * FROM information WHERE(manuy_id='$id') ";
    
    if(!$result = mysqli_query($mysqli,$query)) {
        return false;
    }
    $ret=array();
    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $num1=$row['num1'];
        $num2=$row['num2'];
        
        $ret[$id]['num1']=$num1;
        $ret[$id]['num2']=$num2;
        $ret[$id]['data']=($num1>$num2)?"Day":"Night";
    }
    return $ret;
    
}
function get_his($mysqli){
	$id=$_SESSION['id'];
    $query ="select * from information where(manuy_id='$id')order by id desc limit 30";
    
    if(!$result = mysqli_query($mysqli,$query)) {
        return false;
    }
    $ret=array();
    while($row = mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $num1=$row['num1'];
        $num2=$row['num2'];
		$date=$row['date_in'];
        
        $ret[$id]['num1']=$num1;
        $ret[$id]['num2']=$num2;
        $ret[$id]['data']=($num1>$num2)?"Day":"Night";
		$ret[$id]['date']=$date;
    }
    return $ret;
    
}
