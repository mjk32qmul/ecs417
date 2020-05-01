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
            $dbhost = getenv("MYSQL_SERVICE_HOST");
            $dbport = getenv("MYSQL_SERVICE_PORT");
            $dbuser = getenv("DATABASE_USER");
            $dbpwd = getenv("DATABASE_PASSWORD");
            $dbname = getenv("DATABASE_NAME"); 
            // Creates connection
            $conn = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
            // Checks connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            else{
                echo "Connection sucessful";
            }

            $password = "";
            $username = "";
            
            $sql = "SELECT userName, password FROM USERS";
            $result = $conn->query($sql);
            echo .$result;
            if ($result->num_rows > 0){
                echo "correct";
            }

            /*$_SESSION["username"] = "username";
            $_SESSION["password"] = "password";
            echo "name = " .$_SESSION["username"];
            echo "password = " .$_SESSION["password"];*/
        ?>
    </body>
</html>