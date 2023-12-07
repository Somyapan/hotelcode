<?php
$hostName = "localhost";
$dbName  = "hbwebsite";
$username ="root";
$password ="";
try{
	$conn = new PDO("mysql:host=$hostName;dbname=$dbName",$username,$password);
}
catch (PDOExecption $e) {
	print "Error!: " .$e->getMessage() . "</br>";
	die();
}
echo "";


?>