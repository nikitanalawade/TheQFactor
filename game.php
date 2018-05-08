<?php
session_start();
//store session data
?>
<html>
<head>
<title>GET STARTED</title>
</head>
<body background="back7.png">
<center>

<h1>START</h1>
<hr width="70%">
<form>
<h1>Choose your level</h1>
<br><br><br><br>
<h2>LEVEL:<select name="lvl" id="level">
<option value=""></option>
<option value="easy">EASY</option>
<option value="medium">MEDIUM</option>
<option value="difficult">DIFFICULT</option>
</select></h2>
<h2><input type="submit" name="PLAY" value="play">
<?php     
	
                $level=$_GET['lvl'];
	$_SESSION['var3']=$level;
//$url= "?id=$id&name=$name&lvl=$level";
		if($level=='easy')
		header('location:easy.php');
		if($level=='medium')
		header('location:medium.php');
		if($level=='difficult')
		header('location:difficult.php');
?>

</form>
</center>
</body>
</html>