<?php
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
	$sqlQuery = "SELECT * FROM POSTS ORDER BY ID DESC";
	$result = $conn->query($sqlQuery);
	$entries = array();

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$comments = array();
			$sqlQueryComments = "SELECT * FROM COMMENTS WHERE postID=".$row["ID"];
			$resultComments = $conn->query($sqlQueryComments);
			if ($resultComments->num_rows > 0){
				while($column = $resultComments->fetch_assoc()){
					array_push($comments, $column["time"], $column["username"], $row["contents"], $row["postID"], $row["commentID"]);
				}
			}
			$tmp = array($row["time"], $row["username"], $row["contents"], $row["ID"], $comments);
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
		<div class="nav">
            <nav>
                <ul>
					<li><a href="Portfolio.php">Home</a></li>
					<?php
						if ($_SESSION["loggedIn"]){
							echo "<li><a href='addpost.php'>Add Post</a></li>";
						}
						else{
							echo "<li><a href='Login.html'>Login</a></li>";
						}
					?>
					<li><a href="Blog.php">Blog</a></li>
                </ul>
            </nav>
        </div>
		<script>
			function removeText(){
				document.getElementById("message").value = "";
			}
		</script>
		<?php
			if($_SESSION["loggedIn"] && $_SESSION["admin"] == 1){
				echo "<div id='addPost'>";
				echo "<form action='submitPost.php' method='post'>
					  <textarea id='message' name='message' rows='15' cols='100'></textarea><br/>
					  <input type='submit'>
					  </form>
					  <input type='button' value='Clear' id='clearButton' onclick='javascript: removeText();'>";
				echo "</div>";
			}
		?>
		<article id='blog'>
			<?php
				if (count($entries) < 1){
					echo "<section id='post'><p id='contents'>Sorry but there are no posts at the moment. Please check back again later</p>
					</section>";
				}
				else{
					for ($row = 0; $row < count($entries); $row++){
						echo "<section id='post'>
						<p><span id='username'>".$entries[$row][1]."</span>    <span id='time'>(".$entries[$row][0].")</span></p>
						<br/>
						<p id='contents'>".$entries[$row][2]."</p>
						</section>
						<br/>";
						for ($y = 0; $y < count($entries[$row][4]); $y++){
							echo "<section id='comment'>
							<p><span id='username'>".$entries[$row][4][$y][1]."</span>    <span id='time'>(".$entries[$row][4][$y][0].")</span></p>
							<br/>
							<p id='contents'>".$entries[$row][4][$y][2]."</p>
							</section>
							<br/>";
						}
						if ($_SESSION["loggedIn"]){
						echo "<form action='submitComment.php' method='post'>
							<input name='postID' type='hidden' value='".$entries[$row][3]."'>
							<textarea name='message' rows='5' cols='100'></textarea><br>
							<input type='submit'>
						</form>";
						}
					}
				}
			?>
		</article>
    </body>
</html>