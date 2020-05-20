<?php
	if (isset($_SESSION)){
		header("Location: Portfolio.php");
	}
	else{
		session_start();

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

		//$password = "Bananas Ar3 V3ry tasty!";
		//$username = "Matthew-King";
		//$email = "ec19115@qmul.ac.uk"

		$password = $_POST["password"];
		$email = $_POST["email"];
		$sha256pass = crypt($password, '$5$anexamplestringforsalt$');
		$sql = "SELECT * FROM USERS WHERE
		email='".$email."'"."AND password = '".$sha256pass."'";
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			while($row = $result->fetch_assoc()) {
				echo "You're logged in as ".$row["username"];
				$_SESSION["ID"] = $row["ID"];
				$_SESSION["username"] = $row["username"];
				$_SESSION["firstname"] = $row["firstname"];
				$_SESSION["lastname"] = $row["lastname"];
				$_SESSION["email"] = $row["email"];
				$_SESSION["password"] = $row["password"];
				$_SESSION["loggedIn"] = true;
				$_SESSION["admin"] = $row["admin"];
				header("Location: Blog.php?error=1");
			}
		}
		$conn->close();
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
		<div class="nav">
            <nav>
                <ul>
					<li><a href="Portfolio.php">Home</a></li>
					<li><a href="Blog.php">Blog</a></li>
                </ul>
            </nav>
        </div>
		<div class = "login">
			<header>
				<h2>Login</h2>
			</header>
			<?php
				if ($_POST["error"] == 1){
					echo "<p>Sorry an error has occured please try again</p>";
				}
			?>
			<form action="Login.php" method="post">
				email: <input type="email" name="email">
				password: <input type="password" name="password" pattern=".{8,}">
				<input type="submit" value="Login">
			</form>
			<a href="register.html" id="register"><input type="button" value="register"></a>
		</div>
    </body>
</html>