<?php
session_start();
//store session data

?>

<html>
<head><title>AGAIN</title></head>
<body background="back6.png">
<form>
<center>
<h1><b><i><u>PLAYER DETAILS</u></i></b></h1>
<hr><br>
<table border="3" cellspacing="5" cell padding="3">
<?php
$id=$_SESSION['var2'];
//$name=$_SESSION["var2"];
//$level=$_SESSION["var3"];
?>
<?php
echo "<tr><td>PLAYER ID</td><td> $id</td></tr>";
?>
<tr><td>LEVEL</td><td><select name="lvl" id="level">
<option value=""></option>
<option value="easy">EASY</option>
<option value="medium">MEDIUM</option>
<option value="difficult">DIFFICULT</option>
</select></td></tr>
<tr><td></td><td><input type="submit" name="play" value="play"><input type="reset" name="reset" value="reset"></td></tr>

<?php
$level=$_GET['lvl'];
//$url= "?id=$id&name=$name";
		if($level=='easy')
		header('location:easy.php');
		if($level=='medium')
		header('location:medium.php');
		if($level=='difficult')
		header('location:difficult.php');
?>
</table>
</form>
</body>
</html>

