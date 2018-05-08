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
$d=0;
$d1=$_GET['q1'];
if($d1=='b')
{$d++;
}
$d2=$_GET['q2'];
if($d2=='b')
{$d++;
}
$d3=$_GET['q3'];
if($d3=='b')
{$d++;
}
$d4=$_GET['q4'];
if($d4=='d')
{$d++;
}
$d5=$_GET['q5'];
if($d5=='d')
{$d++;
}
$d6=$_GET['q6'];
if($d6=='c')
{$d++;
}
$d7=$_GET['q7'];
if($d7=='a')
{$d++;
}
$d8=$_GET['q8'];
if($d8=='c')
{$d++;
}
$d9=$_GET['q9'];
if($d9=='a')
{$d++;
}
$d10=$_GET['q10'];
if($d10=='a')
{$d++;
}
echo "<b>YOUR SCORE IS: $d</b>";
?>

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
"level" => "difficult",
"score" => "$d"
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


