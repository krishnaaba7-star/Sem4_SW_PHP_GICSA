<?php
// 1. HANDLE COOKIE DELETION
// If the delete button is clicked, we expire the cookie immediately
if (isset($_POST['delete_cookie'])) {
    // Set the expiration date to one hour ago (past time)
    setcookie("username", "", time() - 3600, "/");
    
    // Refresh the page to update the $_COOKIE superglobal
    header("Location: " . $_SERVER['PHP_SELF']);
    exit;
}

// 2. HANDLE COOKIE CREATION
// If the cookie doesn't exist, set it (Example: User just arrived)
if (!isset($_COOKIE["username"])) {
    setcookie("username", "Krishna", time() + 3600, "/");
}

echo "<h2>Cookie Control Center</h2>";

// 3. CHECK AND DISPLAY COOKIE STATUS
if (isset($_COOKIE["username"])) {
    echo "<p style='color: green;'> Cookie 'username' is set! Value: <b>" . $_COOKIE["username"] . "</b></p>";
    
    // Form to trigger the deletion
    echo '<form method="post">
            <button type="submit" name="delete_cookie">Delete Cookie</button>
          </form>';
} else {
    echo "<p style='color: red;'> Cookie is not set or has been deleted.</p>";
    echo "<p>Please <b>Refresh</b> the page to set the cookie again.</p>";
}
?>