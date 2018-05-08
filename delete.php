
<?php
session_start();
?>
<?php

$id=$_SESSION['var2'];
//echo "name:$id";
$m = new MongoClient();

$db = $m->init;

$collection = $db->player_details;

$collection->remove(array("_id"=>"$id"));
?>
<?php
//echo "name:$id";
$player=$_SESSION['var2'];
$m = new MongoClient();

$db = $m->init;

$collection = $db->player_score;

$collection->remove(array("Player id"=>"$player"));

?>
<?php
session_start();
if( isset( $_SESSION['var2'] ) ) {
	unset($_SESSION['var2']);
	echo "<h1 align='center' style='color:green'>ACCOUNT DELETED</h1>";
	echo "<script>setTimeout(function(){window.location.href='register.php';},2000);</script>";
} 

?>
