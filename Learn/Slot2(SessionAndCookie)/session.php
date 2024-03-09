<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>

    <?php
    //start session 
    session_start();

    // check existion of x
    if (!array_key_exists("x", $_SESSION)){
        $_SESSION["x"] = 0;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(array_key_exists("up", $_POST)){
            $_SESSION["x"] +=1;
        } 
        if(array_key_exists("down", $_POST)){
            $_SESSION["x"] -=1;
        } 
        if(array_key_exists("reset", $_POST)){
            session_destroy();
        } 
    }
    ?>

    <h1>Session Demo</h1>
    <p>You have clicked this button <?php echo $_SESSION["x"] ?> times.</p>
    <form action="" method="post">

        <input type="submit" name="up" value="up 1">
        <input type="submit" name="down" value="down 1">
        <input type="submit" name="reset" value="reset">
        
    </form>




<!-- Đoạn này tự nghĩ ra thử về làm xem có được không  -->
    <!-- <?php
        session_start();
        $x =0;
    ?>
    <h1>Session Demo</h1>
    
    <form action="">
        <input type="submit" name="submit" value="clicking?">
    </form>
    <p>You have clicked this button <?php echo $x ?> times.</p> -->


</body>
</html>