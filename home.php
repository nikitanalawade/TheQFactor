<?php
session_start();
?>
<html>
<head>
<title>HOME</title>
</head>
<body background="back6.png">
<center>
<h1>HOME</h1>
<hr>
<?php
$id=$_SESSION['var2'];
echo "<h1>USERNAME:$id</h1>";
?>
<h1>Click here to <a href="game.php">GET STARTED</a></h1>
<h1>Click here to <a href="update.php">CHANGE PROFILE</a></h1>
<h1>Click here to <a href="allscore.php">SEE SCORE</a></h1>

<h1>Click here to <a href='delete.php'>DELETE ACCOUNT</a></h1>
<h1><a href="register.php">LOGOUT</a></h1>
</center>
</body>
</html>