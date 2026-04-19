<?php

setcookie("username", "Krishna", time() + 3600, "/");
setcookie("username", "Rahul", time() + 3600, "/");
// setcookie("username", "", time() - 3600, "/");
setcookie("user", "Krishna", time()+3600, "/", "", true, true);
// setcookie("user", "Krishna");
// setcookie("user", "Krishna", time()+86400);
// echo $_COOKIE["username"];
if(isset($_COOKIE["username"])) {
    echo "Welcome " . $_COOKIE["username"];
} else {
    echo "Cookie not set!";
}
?>