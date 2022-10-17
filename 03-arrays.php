<?php
// Array Examples
// Use arrays if you need to store multiple values
$players = ["Antony", "Martial", "Sancho"]; // Simple array of strings
$numbers = [2, 4, 6, 8]; // Simple array of numbers

var_dump($players);
echo "<br />";

var_dump($numbers);
echo "<br />";

// prettier-ignore
$languages = array("JavaScript", "Java", "PHP"); // Using array() to create array strings
var_dump($languages);
echo "<br />";

// prettier-ignore
$information = array("Shawqi Hatem", 8, 2003, true); // Using array() to create array of different types
var_dump($information);
echo "<br />";

// Accessing Elements Inside Arrays
echo $players[0];
echo "<br />";

echo $numbers[2];
echo "<br />";

// Associative Arrays
// Allow us to use named keys to identify values
$personalities = ["R" => "Red", "Y" => "Yellow", "G" => "Green", "B" => "Blue"];
$colors = ["Red" => "#FF0000", "Green" => "#00FF00", "Blue" => "#0000FF"];

var_dump($personalities);
echo "<br />";

var_dump($colors);
echo "<br />";

echo $personalities["R"]; // Red
echo "<br />";

echo $personalities["B"]; // Blue
echo "<br />";

echo $colors["Red"]; // #FF0000
echo "<br />";

echo $colors["Green"]; // #00FF00
echo "<br />";

// Multi-Dimensional Arrays
// Allow us to store data in a table format
$students = [
  [
    "first-name" => "Shawqi",
    "last-name" => "Hatem",
    "email" => "shawqicauses@outlook.com",
  ],
  [
    "first-name" => "John",
    "last-name" => "Smith",
    "email" => "john@outlook.com",
  ],
];

var_dump($students);
echo "<br />";

print_r($students);
echo "<br />";

// Accessing Values In Multi-Dimensional Arrays
echo $students[0]["first-name"];
echo $students[0]["last-name"];
echo $students[0]["email"];

?>
