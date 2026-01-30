<?php
$students = [
    ["John", 20, "Computer Science"],
    ["Sarah", 22, "Mathematics"],
    ["Mike", 21, "Physics"]
];

echo $students[0][0]; // Outputs: John
echo $students[1][1]; 

$students = [
    [
        "name" => "John",
        "age" => 20,
        "major" => "Computer Science"
    ],
    [
        "name" => "Sarah",
        "age" => 22,
        "major" => "Mathematics"
    ]
];

echo $students[0]["name"]; // Outputs: John

$schools = [
    "High School" => [
        "Grade 10" => ["John", "Sarah"],
        "Grade 11" => ["Mike", "Lisa"]
    ],
    "College" => [
        "Year 1" => ["David", "Emma"],
        "Year 2" => ["Alex", "Sophie"]
    ]
];

echo $schools["High School"]["Grade 10"][1]; 
?>