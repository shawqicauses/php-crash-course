<?php
/*
A) Iterations and Loops
- For Loop
for (initialize; condition; increment) {
  // Code to be executed
  // Executed on each iteration
}

- While Loop
while (condition) {
  // Code to be executed
  // Executed on each iteration
}

- Do While Loop
do {
  // Code to be executed
  // Executed once before checking condition
} while (condition);


- For Each Loop: Loops Through Array
foreach ($array as $item) {
  // Code to be executed
  // Executed on each item
}

- Accessing Indexes In Arrays:
foreach ($array as $index => $item) {
  // Code to be executed
  // Executed on each item
}
*/

for ($index = 0; $index <= 10; $index++) {
  echo "For Loop " . $index;
  echo "<br />";
}

$index = 10;
while ($index < 20) {
  echo "While Loop " . $index;
  echo "<br />";
  $index++;
}

do {
  echo "I wil be executed once";
  echo "<br />";
} while (false);

$posts = [
  "A." => "First Post",
  "B." => "Second Post",
  "C." => "Third Post",
  "D." => "Fourth Post",
];

foreach ($posts as $post) {
  echo $post;
  echo "<br />";
}

foreach ($posts as $index => $post) {
  echo "$index $post";
  echo "<br />";
}

?>
