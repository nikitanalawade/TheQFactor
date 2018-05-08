
<html>
<head>
<title>SAVE DETAILS</title>
<body background="back6.png">
<?php

if( !empty($_GET['id']) && !empty($_GET['pwd']) && !empty($_GET['name'])
 && !empty($_GET['email'])) {
	

	$id = $_GET['id'];
	$pd = $_GET['pwd'];
	$nm = $_GET['name'];
	$cn = $_GET['contact'];
	$em = $_GET['email'];
	$query=array("_id"=>"$id");

	$document = array(
		"_id" => "$id",
		"password" => "$pd",
		"name" => "$nm",
		"email" => "$em",
		"contact" => "$cn"
		);

	$m = new MongoClient();
	$db = $m->init;
	$collection = $db->player_details;
	$check=$collection->find($query);
	if($check->hasNext())
	{ echo "<br><br><h1 align='center'>Please enter different username<h1>";
	echo "<h1 align='center'>Click<a href='register.php'>here</a>to go back to the form</h1>";
}
else
{
	$collection->insert($document);
	echo "<br><br><h1 align='center'>ACCOUNT CREATED !!</h1>";
	echo "<div align='center'><a href='login.php'>LOGIN WITH YOUR USERNAME AND PASSWORD TO PROCEED</a><br>";
 }
}
else {
	echo "<br><br><h1 align='center'>PLEASE FILL THE FORM</h1>";
        echo "<h1 align='center'>Click<a href='register.php'> here</a> to go back to the form</h1>";
}


?>
</html>