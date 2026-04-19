<?php
session_start();

// Login
session_regenerate_id(true);
$_SESSION['user_id'] = $user['id'];

// Check
if (empty($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

// Logout
$_SESSION = [];
session_destroy();
header('Location: login.php'); //header function is used to redirect the user to the login page after logging out
exit;
?>  