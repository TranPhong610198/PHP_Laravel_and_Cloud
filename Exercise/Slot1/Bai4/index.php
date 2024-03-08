<!-- làm 1 form nhap ten va tuoi de show ra man hinh -->
<!-- Make a Form to input Name and Age to print out to screen -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 4</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="">Name:</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Age:</label>
            <input type="number" name="age">
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
        
        if (isset($_POST["submit"])) {
            $name = $_POST["name"];
            $age = $_POST["age"];
            
            echo "<h2>Hello, my name is {$name}, and I'm {$age} years old.</h2>";
        }
    ?>
</body>
</html> 