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
            
            $sql = "SELECT username, password, firstname, lastname, email FROM USERS WHERE
            username='".$username."'";
            $sha256pass = crypt($password, '$5$anexamplestringforsalt$');
            echo $sql. "\n<br>";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                echo "got em";
                while($row = $result->fetch_assoc()) {
                    if ($row["password"] == $sha256pass){
                        echo "id: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email " . $row["email"]. " - Password " . $row["password"]."<br>";
                    }
                }
            } else {
                echo "0 results";
            }
            $conn->close();


            /*$_SESSION["username"] = "username";
            $_SESSION["password"] = "password";
            echo "name = " .$_SESSION["username"];
            echo "password = " .$_SESSION["password"];*/
        ?>
    </body>
</html>