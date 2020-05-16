<?php
    session_start();
 	if (!$_SESSION["loggedIn"]){
		header("Location: Login.php");
	}
	else{
		$postContents = $_POST["message"];
		echo "You sent message: ".$postContents;
		$sqlQuery = "INSERT INTO POSTS (username,  contents) VALUES('".$_SESSION["username"]."','".$postContents."')";
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
		
		if ($conn->query($sqlQuery) === TRUE){
			echo "New entry created";
		}
		else{
			echo "Error: ".$sqlQuery. "<br>" .$conn->error;
		}
	}
?>

<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>My Site</title>
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    </body>
</html>