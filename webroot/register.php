<?php
	$dbhost = getenv("MYSQL_SERVICE_HOST");
	//$dbport = getenv("MYSQL_SERVICE_PORT");
	$dbuser = getenv("DATABASE_USER");
	$dbpwd = getenv("DATABASE_PASSWORD");
	$dbname = getenv("DATABASE_NAME"); 
	// Creates connection
	$conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
	// Checks connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$password = crypt($_POST["password"],'$5$anexamplestringforsalt$');
	$username = $_POST["username"];
	$firstname = $_POST["firstname"];
	$lastname = $_POST["lastname"];
	$email = $_POST["email"];
	
	$sql = "INSERT INTO USERS (username, firstname, lastname, password, email, admin) VALUES ('".$username."','".$firstname."','".$lastname."','".$password."','".$email."', 0)";
	$result = $conn->query($sql);
	if ($conn->query($sqlQuery) === TRUE){
		echo "New user created";
	}
	else{
		echo "Error: ".$sqlQuery. "<br/>" .$conn->error;
	}
	header("Location: Portfolio.php");
	
?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Untitled Document</title>
	</head>
	<body>
	</body>
</html>