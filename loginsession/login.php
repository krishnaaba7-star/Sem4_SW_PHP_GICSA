<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Simple static validation
    if($username == "admin" && $password == "1234") {

        $_SESSION["username"] = $username;

        // Security: regenerate session ID
        session_regenerate_id(true);

        header("Location: dashboard.php");
        exit();

    } else {
        echo "Invalid Username or Password!";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
</form>