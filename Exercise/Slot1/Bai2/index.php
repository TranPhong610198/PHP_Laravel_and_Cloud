<!-- In ra List tu 1 den number nhap tu ban phim -->
<!-- Print a List from 1 to number, that was typed from keyboard -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 2</title>
</head>
<body>
    <h2>Enter a Number</h2>
    <form action="" method="post">
        <div>
            <label for="number">Number:</label>
            <input type="number" name="number"><br>
            <input type="submit" value="Generate List">
        </div>
    </form>
    <?php
    if (isset($_POST["number"])) {
        $number = $_POST["number"];

        echo "<h2>List of Number:</h2>";
        for ($i = 1; $i <= $number ; $i++){
            echo "<li>$i</li>";  
        }
    }
    ?>
</body>
</html>