<?php
/*
A) Operators and Conditionals
1) Operators
- < Less Than
- > Greater Than
- <= Less Than Or Equal To
- >= Greater Than Or Equal To
- == Equal To
- === Identical To
- != Not Equal To
- !== Not Identical To

2) Conditionals
- IF Statement
if (your-condition-here) {
  // Code will execute if your-condition is true
} elseif (another-condition-here) {
  // Code will execute if another-condition is true
} else {
  // Code to be executed if no condition is true
}

- Ternary Operator: is a short-hand for if statement
$variable = condition ? true : false
echo condition ? true : false

- Switch Statement
switch ($variable) {
  case first-case:
    echo "First Case";
    break;
  case second-case:
    echo "Second Case";
    break;
  default:
    echo "Default Case";
}
*/

// IF Statement
$age = 20;
if ($age > 18) {
  echo "Please die, you have lived enough";
} elseif ($age === 18) {
  echo "You are in your last year of living";
} else {
  echo "You still have some time to live";
}

echo "<br />";
$posts = [];
if (!empty($posts)) {
  echo $posts[0];
} else {
  echo "There is no posts";
}

// Tertiary Operator
// Echo based on a condition
echo "<br />";
echo !empty($posts) ? $posts[0] : "There is no posts";

// NULL Coalescing Operator
// Always returns first parameter, unless first parameter is NULL
// Return NULL if first parameter is empty
$first_post = $posts[0] ?? null;
echo "<br />";
echo $first_post;
var_dump($first_post);

// Switch Statement
echo "<br />";
switch ($age) {
  case $age > 18:
    echo "Please die, you have lived enough";
    break;
  case 18:
    echo "You are in your last year of living";
    break;
  default:
    echo "You still have some time to live";
}

?>
