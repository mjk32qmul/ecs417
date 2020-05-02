<?php
    session_start();
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
        <?php if ($_SESSION["loggedIn"]) ?>
            <form action="submitPost.php" method="post">
                <textarea id="help" rows="15" cols="100"></textarea><br>
                <input type="submit">
            </form>
        <?php if (!$_SESSION["loggedIn"]) ?>
            <h>Sorry you're not logged in so can't make a post</h>
    </body>
</html>