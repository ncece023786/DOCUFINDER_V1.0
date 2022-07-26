<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
ob_start();
session_start();
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'barangay-168-db');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$conn = new PDO( 'mysql:host=localhost;dbname=barangay-168-db', 'root', '');
	if(!$conn){
		die("Fatal Error: Connection Failed!");
	}




	
if(isset($_SESSION['id'])) {
	$queryBlotter = mysqli_query($link,"SELECT * FROM blotter WHERE confirm_status = 1 AND accounts_id = ".$_SESSION['id']);
}