<?php
	session_start();
	if (!$_SESSION["loggedIn"]){
		header("Location: Portfolio.php");
	}
	else{
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

		$username = $_SESSION["username"];
		$contents = $_POST["messageComment"];
		$postID = $_POST["postID"];

		$sqlQuery = "INSERT INTO COMMENTS (username, contents, postID) VALUES('".$username."','".$contents."','".$postID."')";

		if ($conn->query($sqlQuery) === TRUE){
			echo "Comment added";
		}
		else{
			echo "Error: ".$sqlQuery. "<br>" .$conn->error;
		}
		header("Location: Blog.php");
	}	
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