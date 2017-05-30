<?php 
session_start();
include "config.php";
$id = $_POST["id"];
$rights = $_POST["rights"];  
if ($rights == "administratorius") {          
    $rights = "administratorius";      
} else if ($rights == "rasytojas") {
     $rights = "rasytojas";  
} else {
	$rights = "skaitytojas";
}
$sql = "UPDATE member
		SET rights = '".$rights."'
		WHERE mem_id=".$id."";
if($conn->query($sql)=== TRUE) {
	header ("Location: admin.php");
	} else {
	echo "klaida: " . $sql . "<br>" . $conn->error;
	}

?>