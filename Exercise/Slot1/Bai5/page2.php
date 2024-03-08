<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 5</title>
</head>
<body>
    <?php
        $item = $_POST["item"];
        echo"Item: $item";
    ?>
    <form action="page3.php" method="post">
        <div>
            <input type="hidden" name="item" value="<?php echo "$item";?>"> <!-- dung type hidden de truyen du lieu-->
            <label for="">Enter brand to buy:</label>
            <input type="text" name="brand">
            <input type="submit" name="submit2">
        </div>
    </form>
</body>
</html>