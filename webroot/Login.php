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
        <?php
            $_SESSION["username"] = "username";
            $_SESSION["password"] = "password";
            echo "name = " .$_SESSION["username"];
            echo "password = " .$_SESSION["password"];

            $dbhost = getenv("172.31.4.56");
            $dbuser = getenv("admin");
            $dbpwd = getenv("password");
            $dbname = getenv("ecs417");
            // Creates connection
            $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
            // Checks connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                echo "Connection sucessful";
            }
        ?>
    </body>
</html>