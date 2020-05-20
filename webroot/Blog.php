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
			$tmp = array($row["time"], $row["username"], $row["contents"], $row["ID"], $row["title"]);
			array_push($entries, $tmp);
		}
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
					<?php
						if ($_SESSION["loggedIn"]){
							echo "<li><a href='Logout.php'>Logout</a></li>";
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
		<article id='blog'>
			<?php
				if($_SESSION["loggedIn"] && $_SESSION["admin"] == 1){
					echo "<div id='addPost'>";
					echo "<form action='submitPost.php' method='post'>
						  <h2>Add Post</h2>
						  <label for='addPostTitle'>Title:</label><input type='text' id='addPostTitle' name='title' pattern='.{1,}'>
						  <label for='message'>Contents</label>
						  <textarea id='message' name='message' rows='15' cols='10000' pattern='.{1,}'></textarea><br/>
						  <div id='postButtons'>
						  <input type='submit'>
						  <input type='button' value='Clear' id='clearButton' onclick='javascript: removeText();'>
						  </div>
						  </form>";
					echo "</div>";
				}
				if (count($entries) < 1){
					echo "<section id='post'><p id='contents'>Sorry but there are no posts at the moment. Please check back again later</p>
					</section>";
				}
				else{
					for ($row = 0; $row < count($entries); $row++){
						echo "<section id='post'>
						<h2 id='postTitle'>".$entries[$row][4]."</h2>
						<p><span id='username'>".$entries[$row][1]."</span>    <span id='time'>(".$entries[$row][0].")</span></p>
						<br/>
						<p id='contents'>".$entries[$row][2]."</p>";
						if ($_SESSION["admin"] == 1){
							echo "<form action='remove.php' method='post'><input name='postID' type='hidden' value='".$entries[$row][3]."'><input name='postType' type='hidden' value='0'>
							<input name='deleteButton' type='submit' value='delete'></form>";
						}
						echo "</section>";
						$sqlQueryComments = "SELECT * FROM COMMENTS WHERE postID=".$entries[$row][3]." ORDER BY commentID DESC";
						$resultComments = $conn->query($sqlQueryComments);
						
						echo "<p id='commentTitle'>Comments:</p><article id='commentSection'>";
						
						if ($resultComments->num_rows > 0){
							while($column = $resultComments->fetch_assoc()){
								echo "<section id='comment'>
								<p><span id='username'>".$column["username"]."</span>    <span id='time'>(".$column["time"].")</span></p>
								<br/>
								<p id='contents'>".$column["contents"]."</p>";
								if ($_SESSION["admin"] == 1){
									echo "<form action='remove.php' method='post'><input name='postID' type='hidden' value='".$entries[$row][3]."'><input name='postType' type='hidden' value='1'>
									<input name='deleteButton' type='submit' value='delete'></form>";
								}
								echo "<br/></section>";
							}
						}
						if ($_SESSION["loggedIn"]){
							echo "<br/><form action='submitComment.php' method='post' id='makeComment'><label for'messageComment'>Add Comment</label>
								<input name='postID' type='hidden' value='".$entries[$row][3]."'>
								<textarea name='messageComment' rows='5' cols='1000' id='commentTextArea' pattern='.{1,}'></textarea><br>
								<input type='submit'>
							</form><br/>";
						}
						echo "</article><br/>";
						
					}
				}
			?>
		</article>
    </body>
</html>
<?php
	$conn->close();