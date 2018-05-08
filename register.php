<?php 
session_start();
if( isset( $_SESSION['var2'] ) ) {
	unset($_SESSION['var2']);}
?>
<html>
<head>
<title>REGISTRATION FORM</title>
</head>
<body background="back6.png">

<center>
<h1>THE 'Q' FACTOR</h1>
<hr>
<h1 align="top right"><a href="login.php">LOGIN</a></h1>
<h1>PLAYER DETAILS</h1>
<hr width="70%">

<table>
<form action="save.php" method="get">
<tr><td>Username </td><td><input type="text" name="id"></td></tr>
<tr><td>Password</td><td><input type="password" name="pwd"></td></tr>
<tr><td>Name </td><td><input type="text" name="name"></td></tr>
<tr><td>Email </td><td><input type="text" name="email"></td></tr>
<tr><td>Contact </td><td><input type="text" name="contact"></td></tr>
<tr><td colspan="2" align="center"><input type="Submit" value="Save"><input type="reset" value="Clear"></td></tr>
</table>

</form>
</center>

</body>
</html>
