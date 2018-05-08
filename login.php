<?php
session_start();
$_SESSION['var2']=$_GET['id'];
?>
<?php
if ( isset( $_GET['id'] ) ) 
{

	if ( !empty($_GET['id']) && !empty($_GET['pwd'] ) )
	{		
			$un=$_GET['id'];
			$p=$_GET['pwd'];
			$m = new MongoClient();
	                $db = $m->init;
	                $collection = $db->player_details;
		$qry = array("_id" => $un,"password" => $p);
                $result = $collection->findOne($qry);
		if($result)
		{
		header('location:home.php');
		} else
		{
			echo "<h1 align='center'>Invalid username or Password";
			echo "<h1 align='center'>Click<a href='login.php'> here </a>to re-enter correct data</h1>";
			echo "<h1 align='center'>Click<a href='register.php'> here </a>to create new user</h1>";
			
		}
	} else
		{
		echo "<h1 align='center'>Invalid or empty username or Password";
			echo "<h1 align='center'>Click<a href='login.php'> here </a>to re-enter correct data</h1>";
			echo "<h1 align='center'>Click<a href='register.php'> here </a>to create new user</h1>";
		}
	
} else {
?>
<html>
<head><title>Login</title></head>
<body background="back6.png">
<center>
<br><br>
<h1>LOGIN</h1>
<hr width="70%"><br><br>
<form action="login.php" method="get">
<table>
<tr><td>Username</td><td><input type="text" name="id"></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" value="login">


</table>
</form>
</body>

</html>
<?php } ?>
