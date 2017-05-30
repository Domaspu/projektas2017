
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "mano";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	}
	echo "Connected successfully";
	
	$sql = "INSERT INTO comments (
					username,
					text,
					userEmail,
					date,
					time)
			VALUES ('".$_POST["username"]."',
					'".$_POST["text"]."',
					'".$_POST["userEmail"]."',
					Now(),
					'')";										

	if ($conn->query($sql) === TRUE){
		header("Location: index2.php");
	} else{
		echo "klaida: " . $sql . "<br>" . $db->error;
	}
		// Connection close	
		$conn->close();		
		
		//Nukreipimas i kita puslapi
		
?>