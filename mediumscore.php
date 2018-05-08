<html>
<head><title>Score</title></head>
<body background="back6.png">
<center>

<?php
session_start();
//store session data
?>

<?php
$id=$_SESSION["var2"];
echo" <h1> ID  :$id </h1>";
?>

<?php
$m=0;
$m1=$_GET['q1'];
if($m1=='b')
{$m++;
}
$m2=$_GET['q2'];
if($m2=='b')
{$m++;
}
$m3=$_GET['q3'];
if($m3=='a')
{$m++;
}
$m4=$_GET['q4'];
if($m4=='d')
{$m++;
}
$m5=$_GET['q5'];
if($m5=='d')
{$m++;
}
$m6=$_GET['q6'];
if($m6=='c')
{$m++;
}
$m7=$_GET['q7'];
if($m7=='a')
{$m++;
}
$m8=$_GET['q8'];
if($m8=='c')
{$m++;
}
$m9=$_GET['q9'];
if($m9=='a')
{$m++;
}
$m10=$_GET['q10'];
if($m10=='a')
{$m++;
}
$med=$m;
echo "<b>YOUR SCORE IS: $med</b>";

?>

<br><br>
<?php

// connect to mongodb
$m = new MongoClient();
//echo "Connection to database successfully";
// select a database
$db = $m->init;
//echo "Database mydb selected";
//$collection = $db->createCollection("player_score");
$collection = $db->player_score;
//echo "Collection selected succsessfully";
$document = array(
"Player id" => "$id",
//"Player name" => "$name",
"level" => "medium",
"score" => "$med"
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




