<?php
    session_start();
 	if (!$_SESSION["loggedIn"] || $_SESSION["admin"] == 0){
		header("Location: Login.php");
	}
	else{
		$postContents = $_POST["message"];
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
		header("Location: Blog.php");
	}
?>

<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>My Site</title>
        <link rel="stylesheet" type="text/css" href="webroot/css/reset.css">
        <link rel="stylesheet" type="text/css" href="webroot/css/style.css">
    </head>
    <body>
    </body>
</html>