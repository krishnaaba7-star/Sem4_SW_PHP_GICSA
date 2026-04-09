<?php
$name = $email = "";
$nameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }
}
?>

<form method="post" action="">
  Name: <input type="text" name="name">
  <span style="color:red;"> <?php echo $nameErr; ?> </span>
  <br><br>

  Email: <input type="text" name="email">
  <span style="color:red;"> <?php echo $emailErr; ?> </span>
  <br><br>

  <input type="submit" value="Submit">
</form>

<?php
// Show data after submit
if ($name && $email) {
    echo "<h3>Output:</h3>";
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email;
}
?>