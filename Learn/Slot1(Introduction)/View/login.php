<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="/Controller/LoginController.php" method="POST">
        <div>
            <label for="username">Username</label>
            <input type="text" name="username" >
        </div>
        <div> 
            <label for="password">Password</label>
            <input type="password" name="password">
        </div>
        <div>
            <input type="submit" name="login" >
        </div>
    </form>
</body>
</html>