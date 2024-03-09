<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <h1>Cookie Demo</h1>
    <h3>
        <?php
        if (count($_COOKIE) >0) {
            echo "Your Browers Supports Cookies";
        }
        else {
            echo "Your Browers Not Support Cookies";
        }
        
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            if (array_key_exists("username", $_POST)) {
                setcookie("username", $_POST["username"]);
            }
            if (array_key_exists("deleteAll", $_POST)) {
                setcookie("deleteAll", "" , time() -0);
            }
        }

        ?>
    </h3>

    <form action="" method="post">
        <label for="">
            <?php
                if(!array_key_exists("username", $_COOKIE)) {
                    echo "I don't know you. Can you tell me your name?";
                }
                else {
                    echo"Hi, " . $COOKIE["username"]. " Wellcom Back!!!";
                }
            ?>
        </label>
        <br>
        <input type="text" name="username">
        <input type="submit" name="submit" value="submit">
        <input type="submit" name="deleteAll" value="delete">
    </form>
</body>
</html>