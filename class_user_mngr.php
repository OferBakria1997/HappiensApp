<?php
class user_mngr   {
    private $mysqli;
	private $table;
	private $s;
    public function __construct($mysqli) {
        $this->mysqli = $mysqli;
        $this->table="users";
		$this->s=145;
    }
		
    function register($name,$email,$uname,$pass) {
		$query  = "INSERT INTO ".$this->table;
		$query .= " (`name`,`email`,`uname`,`pass`) ";
		$query .= " VALUES ('$name','$email','$uname','$pass')";
		//echo $query;
		$result = mysqli_query($this->mysqli,$query);

		if(!$result) {
			return false;
		}
		return true;
    }
	//--------------------------------------------------------------------------------
	function get_id($email){
		$query="SELECT id FROM ".$this->table." WHERE (email ='$email')";
		$result = mysqli_query($this->mysqli,$query);
		$row = mysqli_fetch_assoc($result);
		return $row['id'];
	}
	//--------------------------------------------------------------------------------
		function get_id_tochecklogin($id){
			$div=100000;
			$id=intdiv ($id,$div);
		$query="SELECT * FROM ".$this->table." WHERE (id ='$id')";
		$result = mysqli_query($this->mysqli,$query);
		$row = mysqli_fetch_assoc($result);
		if($row>0)
		return true;
	else return false;
		}
	//--------------------------------------------------------------------------------
	function get_name($id)
	{
		/*div=100000;
		$id=intdiv ($id,$div);*/
		$query="SELECT name FROM ".$this->table." WHERE (id ='$id')";
		$result = mysqli_query($this->mysqli,$query);
		$row = mysqli_fetch_assoc($result);
		return $row['name'];
	}
	//--------------------------------------------------------------------------------
	function lgn($email,$pass){
		if(isset($_SESSION['cnt']) and $_SESSION['cnt']>1 )//brute force
			echo "<script>alert('do you want a coffe?')</script>";
		if(isset($_GET['remember'])){
			$id=$this->get_id($email);
			setcookie('saveid',$id.rand(10000,99999),time()+60*60*7);
			}
    $query = "SELECT * FROM ".$this->table." WHERE (email='$email' AND pass='$pass')";
    $result = mysqli_query($this->mysqli,$query);
	if(!(mysqli_num_rows($result)>0))//In the case of incorrect details(brute force)
	{
		if(isset($_SESSION['cnt']))
			$_SESSION['cnt']+=1;
		else 
			$_SESSION['cnt']=0;
		echo "<script>alert('wrong Password or Username')</script>";
	}
	else//Correct details
	{
		if(isset($_SESSION['cnt']) and $_SESSION['cnt']>2 )//Check if the user has reached 3 incorrect attempts
			echo "<script>alert('do you want a coffe?')</script>";
		else{
			$id=$this->get_id($email);
			$_SESSION['name']=$this->get_name($id);
			$_SESSION['id']=$id;
			$_SESSION['token']=rand(100000000000000,999999999999999);
			setcookie('uid',$id.rand(10000,99999),time()+60*60*7);
			header('location: welcome.php');
			}
	}
}
	//--------------------------------------------------------------------------------
	function encryption($p)//after regester ;
	{
	return md5($this->s.$p);
	}
	//--------------------------------------------------------------------------------
	function exists($email){
		if($this->get_id($email))
			return false;
		return true;
	}
	

}
?>