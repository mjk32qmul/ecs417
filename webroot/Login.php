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

    $password = "Bananas Ar3 V3ry tasty!";
    $username = "Matthew-King";

    $password = $_POST["password"];
    $username = $_POST["username"];
    $sha256pass = crypt($password, '$5$anexamplestringforsalt$');

    $sql = "SELECT ID, username, password, firstname, lastname, email FROM USERS WHERE
    username='".$username."'"."AND password = '".$sha256pass."'";
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
            header("Location: Blog.php");
        }
    }
    $conn->close();
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
        if (!$_SESSION["loggedIn"]){
            echo "an error has occured please try again";
        }
        ?>
    </body>
</html>