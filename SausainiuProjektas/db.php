
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
	
	$sql = "INSERT INTO member (
					username,
					password,
					userEmail,
					rights) 
			VALUES ('".$_POST["username"]."',
					'".$_POST["password"]."',
					'".$_POST["userEmail"]."',
					'vartotojas')";										

	if ($conn->query($sql) === TRUE){
		header("Location: Login.php");
	} else{
		echo "klaida: " . $sql . "<br>" . $db->error;
	}
		// Connection close	
		$conn->close();		
		
		//Nukreipimas i kita puslapi
		
?>