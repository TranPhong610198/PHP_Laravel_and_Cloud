<?php

require '../Model/User.php';

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $fullnaem = "ádsajdnj";

    if($username == "admin" && $password == "1233"){
        $user = new User($username, $password, $fullnaem);
        header("Location: http://localhost:8433/View/calc.php");
    }
    else{
        header("Location: http://localhost:8433/View/login.php");
    }
}