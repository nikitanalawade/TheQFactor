<?php
session_start();
$id=$_SESSION['var2'];
if(isset($_SESSION['var2']) && isset($_GET['pwd']) && isset($_GET['name']) ) {
	$document = array(		
		"password" => $_GET['pwd'],
		"name" => $_GET['name'],
		"email" => $_GET['email'],
		"contact"=> $_GET['contact']
	);
	$m = new MongoClient();
	$db = $m->init;
	$collection = $db->player_details;
	$collection->update(array("_id"=>$id),array('$set'=>$document));
	header('Location:update.php');
}

?>

<html>
<head>
<title>PROFILE</title>
</head>
<body background="back6.png">
<center>
<h1>PROFILE</h1>
<hr width="70%">
<table border="2" cellpadding="5" cellspacing="5">
<form action="update.php">
<?php
$m = new MongoClient();


$db = $m->init;

$collection = $db->player_details;
$search=array("_id"=>"$id");
$cursor = $collection->find($search);
// iterate cursor to display title of documents
foreach ($cursor as $document) {
$un=$document["_id"];
$pd=$document["password"];
$nm=$document["name"];
$em=$document["email"];
$ct=$document["contact"];

echo "<tr><td>USERNAME</td><td>'$un'</td></tr>";
echo "<tr><td>PASSWORD</td><td><input type='text' value='$pd' name='pwd'></td></tr>";
echo "<tr><td>NAME</td><td><input type='text' value='$nm'  name='name'></td></tr>";
echo "<tr><td>EMAIL</td><td><input type='text' value='$em'  name='email'></td></tr>";
echo "<tr><td>CONTACT</td><td><input type='text' value='$ct'  name='contact'></td></tr>";
}
//<input type="button" value="Cancel" onclick="window.location.href='home.php'"></td></tr>
?>
<tr><td><input type="submit" value="change" class="button" name="update"></td>
</table>
</form>
<br><br>
</center>
</body>
</html>
