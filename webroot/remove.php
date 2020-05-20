<?php
	session_start();
	if($_SESSION["loggedIn"] && $_SESSION["admin"] ==1){ 
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
		
		$sqlQuery="";
		
		if ($_POST["postType"] == 0){
			$sqlQuery = "DELETE FROM POSTS WHERE ID=".$_POST["postID"];
			$sqlQuery2 = "DELETE FROM COMMENTS WHERE postID=".$_POST["postID"];
			$result = $conn->query($sqlQuery);
			$result2 = $conn->query($sqlQUery2);
			echo "gone 0";
			if ($result === TRUE){
				echo "New entry created";
			}
			else{
				echo "Error: ".$sqlQuery. "<br>" .$conn->error;
			}
		}
		else{
			$sqlQuery = "DELET FROM COMMENTS WHERE commentID=".$_POST["postID"];
			$result = $conn->query($sqlQuery);
			echo "gone 1";
			if ($result === TRUE){
				echo "New entry created";
			}
			else{
				echo "Error: ".$sqlQuery. "<br>" .$conn->error;
			}
		}
	}
	//header("Location: Blog.php");
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