<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // 1. Collect raw data
    $raw_name  = $_POST["username"];
    $raw_email = $_POST["email"];
    $raw_age   = $_POST["age"];

    // 2. Sanitize data
    $clean_name  = filter_var($raw_name, FILTER_SANITIZE_SPECIAL_CHARS);
    $clean_email = filter_var($raw_email, FILTER_SANITIZE_EMAIL);
    $clean_age   = filter_var($raw_age, FILTER_SANITIZE_NUMBER_INT);

    // 3. (Optional but Recommended) Validate the sanitized data
    if (filter_var($clean_email, FILTER_VALIDATE_EMAIL)) {
        echo "<h3>Success!</h3>";
        echo "Name: " . $clean_name . "<br>";
        echo "Email: " . $clean_email . "<br>";
        echo "Age: " . $clean_age;
    } else {
        echo "Invalid email format after cleaning.";
    }
}


?>

<form method="post" action="">
    Name: <input type="text" name="username" required><br><br>
    Email: <input type="text" name="email" required><br><br>
    Age: <input type="text" name="age"><br><br>
    <button type="submit">Register User</button>
</form>