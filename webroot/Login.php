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
            $username = "Matthew King";
            
            $sql = "SELECT username, password, firstname, lastname, email FROM USERS WHERE username=".$username."password=".crypt($password, '$5$anexamplestringforsalt$');
            $result = $conn->query($sql);

            if ($result->num_rows > 0){
                echo "correct";
                while($row = $result->fetch_assoc()) {
                    echo "id: " . $row["username"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. " - Email " . $row["email"]. " - Password " . $row["password"]."<br>";
                }
            }

            // 2 character salt

            // 16 character salt starting with $5$. The default number of rounds is 5000.
            if (CRYPT_SHA256 == 1)
            {
            echo "SHA-256: ".crypt('Bananas Ar3 V3ry tasty!','$5$anexamplestringforsalt$')."\n<br>"; }
            else
            {
            echo "SHA-256 not supported.\n<br>";
            }


            /*$_SESSION["username"] = "username";
            $_SESSION["password"] = "password";
            echo "name = " .$_SESSION["username"];
            echo "password = " .$_SESSION["password"];*/
        ?>
    </body>
</html>