<?php

// Function has its own local scope as opposed to global scope
// You can not access variables inside a function when you are outside it
// You can not access variables outside a function when you are inside it
// Function Syntax
function name($first_argument, $second_argument, ...$rest_arguments)
{
  // Code to be executed here
  // Multiple-lines of code
}

$can_not_access_me = "I am outside function's scope";
function register_student()
{
  echo "Student Registered";
  // Undefined variables: $can_not_access_me
  // echo $can_not_access_me;
}

// Invoking (running) register_student function
register_student();
echo "<br />";

// Enhance through adding parameters to a function
function call_me_by_my_name($name)
{
  echo "Hi " . $name . "<br />";
  echo "I called you by your name" . "<br />";
}

// Passing arguments to a function
call_me_by_my_name("Shawqi");
call_me_by_my_name("Anonymous");

// Enhance through returning a value from a function
function first_letter($name)
{
  return $name[0];
}

$my_first_letter = first_letter("Shawqi");
echo $my_first_letter;
echo "<br />";

// Enhance through adding default values to a function
function summation($first_number = 8, $second_number = 8)
{
  $sum = $first_number + $second_number;
  return $sum;
}

echo summation();
echo "<br />";

// Enhance through assigning anonymous function
// Used usually to deal with closures and callback function
$subtraction = function ($first_number = 1, $second_number = 1) {
  return $first_number - $second_number;
};

echo $subtraction(20, 12);
echo "<br />";

// Enhance through using arrow function as a callback function
$multiply = fn($first_number, $second_number) => $first_number * $second_number;
echo $multiply(8, 11);
echo "<br />";

?>