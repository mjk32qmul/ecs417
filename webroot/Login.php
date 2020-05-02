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
                echo "Connection sucessful\n<br>";
            }

            $password = "Bananas Ar3 V3ry tasty!";
            $username = "Matthew-King";

            $password = $_POST["password"];
            $username = $_POST["username"];
            
            $sql = "SELECT ID, username, password, firstname, lastname, email FROM USERS WHERE
            username='".$username."'";
            $sha256pass = crypt($password, '$5$anexamplestringforsalt$');
            echo $sql. "\n<br>";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    if ($row["password"] == $sha256pass){
                        echo "You're logged in as ".$row["username"];
                        $_SESSION["ID"] = $row["ID"];
                        $_SESSION["username"] = $row["username"];
                        $_SESSION["firstname"] = $row["firstname"];
                        $_SESSION["lastname"] = $row["lastname"];
                        $_SESSION["email"] = $row["email"];
                        $_SESSION["password"] = $row["password"];
                        $_SESSION["loggedIn"] = true;
                        header("Blog.php");
                    }
                }
            } else {echo "sorry but the wasn't correct";}
            $conn->close();
        ?>
    </body>
</html>