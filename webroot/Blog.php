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
	$sqlQuery = "SELECT * FROM POSTS ORDER BY ID DESC";
	$result = $conn->query($sqlQuery);
	$entries = array();

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$tmp = array($row["time"], $row["username"], $row["contents"]);
			array_push($entries, $tmp);
		}
	}
	$conn->close();
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
		<article id='blog'>
			<?php
				if (count($entries) < 1){
					echo "<section id='post'>";
					echo "<p id='contents'>Sorry but there are no posts at the moment. Please check back again later</p>";
					echo "</section>";
				}
				else{
					for ($row = 0; $row < count($entries); $row++){
						echo "<section id='post'>";
						echo "<p><span id='username'>".$entries[$row][1]."</span>  ";
						echo "  <span id='time'>(".$entries[$row][0].")</span></p><br/>";
						echo "<p id='contents'>".$entries[$row][2]."</p>";
						echo "</section>";
						echo "<br/>";
					}
				}
			?>
		</article>
    </body>
</html>