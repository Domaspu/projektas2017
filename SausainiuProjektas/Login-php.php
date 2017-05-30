<?php
session_start();
include "config.php";


$username = "";
$password = "";
// username and password sent from Form
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM member 
		WHERE username = '". $username ."' 
		AND password = '". $password ."'";
		
		
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		while ($row = $result->fetch_assoc()) {
			$_SESSION['username'] = $row['username'];
			$_SESSION['men_id'] = $row['mem_id'];
			$_SESSION['rights'] = $row['rights'];
			
			header ("Location: index2.php");
		}
		
		} else{
		header ("Location: login-error.php");
	}
 
        
?>

