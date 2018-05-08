<?php
session_start();
?>
<html>
<head>
<title>SCORE</title>
</head>
<body background="back6.png">
<center>
<h1>SCORE</h1>
<h1 align="right"><a href="home.php">HOME</a></h1>
<hr width="70%">
<table border="2" cellpadding="5" cellspacing="5">

<?php

$m = new MongoClient();
$id=$_SESSION['var2'];
echo "<h1 align='center'>USERNAME:$id</h1>";
echo"<hr>";
$db = $m->init;

$collection = $db->player_score;
$search=array("Player id"=>"$id");
$cursor = $collection->find($search);
// iterate cursor to display title of documents
$h = 0;
foreach ($cursor as $row) {
$u=$row['level'];
$p=$row['score'];

if($h<$p) {
	$h=$p;
}
echo "<tr><td>LEVEL</td><td>$u</td></tr>";
echo "<tr><td>SCORE</td><td>$p</td></tr>";
echo "<tr></tr><tr></tr><tr></tr>";
}
echo "<tr><td>High Score</td><td>$h</td></tr>";
?>
</table>

<br><br>
</center>
</body>
</html>
