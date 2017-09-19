<?php
session_start();

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'newscast';

// //Using PDO NOT WORKED; WORKED NOW
try{
 	$conn = new PDO("mysql:host=" . $servername . ";dbname=" . $database . "; ", $username, $password );
}
  	//$conn->setAttribute(PDO::ATTER_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	//echo "connection sucessfull";

catch(PDOException $e){
	die("Connection Failed: " . $e->getMessage());
}

