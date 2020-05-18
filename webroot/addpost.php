<?php
    session_start();
 	if (!$_SESSION["loggedIn"]){
		header("Location: Login.php");
	}
?>
<!Doctype html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>My Site</title>
        <link rel="stylesheet" type="text/css" href="webroot/css/reset.css">
        <link rel="stylesheet" type="text/css" href="weebroot/css/style.css">
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
		<form action="submitPost.php" method="post">
			<textarea name="message" rows="15" cols="100"></textarea><br>
			<input type="submit">
		</form>
    </body>
</html>