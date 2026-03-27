<?php
$username = $_POST['username'];
echo "Welcome " . $username;

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     echo "Form Submitted!";
// }

if (empty($_POST["username"])) {
    echo "Name is required";
} else {
    $name = htmlspecialchars($_POST["username"]);
    echo "Hello " . $name;
}

?>