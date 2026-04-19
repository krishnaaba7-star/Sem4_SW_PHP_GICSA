<?php
$comment = "<script>alert('Hi');</script> Hello!";

$clean_comment = filter_var($comment, FILTER_SANITIZE_SPECIAL_CHARS);
echo $clean_comment;

// Output: <script>alert('Hi');</script> Hello!

echo "<br>";


$url = "https://example.com/  index.php?name=rahul";
$clean_url = filter_var($url, FILTER_SANITIZE_URL);
echo $clean_url;

// Output: https://example.com/index.php?name=rahul (removes spaces)

echo "<br>";

$age = "21 years old";
$clean_age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

echo $clean_age;

// Output: 21

echo "<br>";
?>