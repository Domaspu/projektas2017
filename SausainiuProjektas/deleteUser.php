<?php 
session_start();
include "config.php";
$id = $_POST["id"];

$sql = "DELETE FROM member		
		WHERE mem_id=".$id;
if($conn->query($sql)=== TRUE) {
	header ("Location: admin.php");
	} else {
	echo "klaida: " . $sql . "<br>" . $conn->error;
	}

?>