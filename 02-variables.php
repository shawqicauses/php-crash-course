<?php
/*
A) Data Types and Variables
1) Data Types
- String - is a sequence of characters surrounded by quotes
- Integer - is every regular and truth number
- Float - is every decimal number
- Boolean - is either true or false
- Array - is a special variable which holds one or more value
- Object - is an instance of a class
- Null - is empty variable - default for uninitialized variables
- Resource - is a special variable which holds a resource

2) Variables Rules
- Variables must be prefixed with dollar sign unless they are constants
- Variables must start with a letter or underscore character
- Variables can not start with a number
- Variables can only contain alpha-numeric characters and underscores (A-Z, a-z, 0-9, and underscore)
- Variables are case-sensitive ($variable and $VARIABLE are two different variables)
*/

// Variables Examples
$name = "Shawqi Hatem"; // String
$first_name = "Shawqi"; // String
$last_name = "Hatem"; // String
$age = 19; // Integer
$money_in_account = 1200.8; // Float
$has_graduated = false; // Boolean
$has_job = true; // Boolean

var_dump($name);
echo "<br />";

var_dump($first_name);
echo "<br />";

var_dump($last_name);
echo "<br />";

var_dump($age);
echo "<br />";

var_dump($money_in_account);
echo "<br />";

var_dump($has_graduated);
echo "<br />";

var_dump($has_job);
echo "<br />";

// Concatenation Strings
// Inserting Variables Inside Strings
echo "What is you first name?" . " " . $first_name . "<br />";
echo "Hi bodies, my name is $first_name $last_name", "<br />";

// Better using curly braces while inserting variables
echo "What is you first name? ${first_name}", "<br />";
echo "Hi bodies, my name is ${first_name} ${last_name}", "<br />";

// Arithmetic Operators
echo 2 + 6; // Integer (8)
echo 2 + "6"; // Integer (8)
echo "2" + "6"; // Integer (8)
echo 10 - 2; // Integer (8)
echo "10" - 2; // Integer (8)
echo "10" - "2"; // Integer (8)
echo "<br />";

// Constants Declaration
// You can not change constant variables
define("HOST", "http://localhost");
define("USER", "@shawqicauses");
var_dump(HOST);
echo "<br />";
var_dump(USER);
echo "<br />";
?>
