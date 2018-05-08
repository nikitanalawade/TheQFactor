<html>
<head><title>Score</title></head>
<body background="back6.png">
<center>
<form>

<?php
session_start();
//store session data
?>

<?php
$id=$_SESSION["var2"];
echo" <br><br><h1> ID  :$id </h1>";
?>

<?php
$s=0;
$s1=$_GET['q1'];
if($s1=='c')
{$s++;
}
$s2=$_GET['q2'];
if($s2=='b')
{$s++;
}
$s3=$_GET['q3'];
if($s3=='a')
{$s++;
}
$s4=$_GET['q4'];
if($s4=='c')
{$s++;
}
$s5=$_GET['q5'];
if($s5=='a')
{$s++;
}
$s6=$_GET['q6'];
if($s6=='c')
{$s++;
}
$s7=$_GET['q7'];
if($s7=='d')
{$s++;
}
$s8=$_GET['q8'];
if($s8=='d')
{$s++;
}
$s9=$_GET['q9'];
if($s9=='c')
{$s++;
}
$s10=$_GET['q10'];
if($s10=='b')
{$s++;
}

echo "<b>YOUR SCORE IS: $s</b>";
?>

<?php

// connect to mongodb
$m = new MongoClient();
// select a database
$db = $m->init;
//echo "Database mydb selected";
//$collection = $db->createCollection("player_score");
$collection = $db->player_score;
//echo "Collection selected succsessfully";
$document = array(
"Player id" => "$id",
//"Player name" => "$name",
"level" => "easy",
"score" => "$s"
);

$collection->insert($document);
echo "Document inserted successfully";

?>

<br><br>
DO YOU WANT TO PLAY AGAIN?
<a href="again.php">YES</a>
<a href="home.php">NO</a>
</form>
</center>
</body>
</html>


