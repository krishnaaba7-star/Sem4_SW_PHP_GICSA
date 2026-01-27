<?php
// Method 1: Using array() function
$person = array(
    "name" => "John",
    "age" => 30,
    "city" => "New York"
);

// Method 2: Using short array syntax 
$person = [
    "name" => "John",
    "age" => 30,
    "city" => "New York"
];

// Method 3: Adding elements individually
$person = [];
$person["name"] = "John";
$person["age"] = 30;
$person["city"] = "New York";


echo $person["name"];  // Outputs: John
echo $person["age"];   // Outputs: 30

// You can also use variables as keys
$key = "city";
echo $person[$key];    // Outputs: New York

// Get all keys
$keys = array_keys($person);

// Get all values
$values = array_values($person); 

// Count elements
$count = count($person);

// Remove an element
unset($person["age"]);

// Get both key and value
foreach ($person as $key => $value) {
    echo "$key: $value\n";
}

// Get only values
foreach ($person as $value) {
    echo $value . "\n";
}


// Get both key and value
foreach ($person as $key => $value) {
    echo "$key: $value<br>";
}

// Get only values
foreach ($person as $value) {
    echo $value . "<br>";
}
$users = [
    "user1" => [
        "name" => "Alice",
        "email" => "alice@example.com",
        "role" => "admin"
    ],
    "user2" => [
        "name" => "Bob",
        "email" => "bob@example.com",
        "role" => "user"
    ]
];

// Accessing nested values
echo $users["user1"]["name"];  // Outputs: Alice

?>
