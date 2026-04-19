<?php
session_start();
$_SESSION["username"] = "Krishna";
$_SESSION["role"] = "Admin";
echo $_SESSION["username"];
echo $_SESSION["role"];
if(isset($_SESSION["username"])) {
    echo "Welcome " . $_SESSION["username"];
} else {
    echo "Please login first.";
}
unset($_SESSION["role"]);
echo $_SESSION["role"];
session_start();
session_destroy();
?>