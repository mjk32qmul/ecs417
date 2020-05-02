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
            echo "name = " .$_SESSION["username"]."\n<br>";
            echo "password = " .$_SESSION["password"]."\n<br>";
            echo "id = " .$_SESSION["ID"]."\n<br>";
            echo "firstname = " .$_SESSION["firstname"]."\n<br>";
            echo "lastname = " .$_SESSION["lastname"]."\n<br>";
            echo "email = " .$_SESSION["email"]."\n<br>";
            if ($_SESSION["loggedIn"]){
                echo "You have been logged in \n<br>";
            }
        ?>
    </body>
</html>