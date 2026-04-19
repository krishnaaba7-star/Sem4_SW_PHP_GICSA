<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["email"];

    // Step 1: Sanitize
    $clean_email = filter_var($email, FILTER_SANITIZE_EMAIL);

    // Step 2: Validate
    if (filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid Email: " . $clean_email;
    } else {
        echo "Invalid Email!";
    }
}
?>

<form method="post">
    Enter Email: <input type="text" name="email">
    <button type="submit">Submit</button>
</form>