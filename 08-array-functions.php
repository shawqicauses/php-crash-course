<?php

$numbers = [2, 4, 6, 8, 10];
echo count($numbers), "<br />"; // Array Length
echo in_array(2, $numbers), "<br />"; // Array Search

// Array Insertion
// Insert to an end of array
$numbers[] = 12;
array_push($numbers, 14, 16);
// Insert to a begin of array
array_unshift($numbers, 0);
print_r($numbers);
echo "<br />";

// Array Removing
array_pop($numbers); // Remove from an end of array
array_shift($numbers); // Remove from a begin of array
print_r($numbers);
echo "<br />";

// Remove Specific Element
unset($numbers[0]);
print_r($numbers);
echo "<br />";

// Array Chunking
$array_chunked = array_chunk($numbers, 2);
print_r($array_chunked);
echo "<br />";

// Array Concatenation
$first_array = [0, 2, 4, 6];
$second_array = [1, 3, 5, 7];
$array_merged = array_merge($first_array, $second_array); // Using array_merge function
$array_merged_spread = [...$first_array, ...$second_array]; // Using spread operator
print_r($array_merged);
echo "<br />";

print_r($array_merged_spread);
echo "<br />";

// Array Combination
$array_keys = ["A", "B", "C"];
$array_values = ["Shawqi", "Hatem", "Something Else"];
$array_combined = array_combine($array_keys, $array_values);
print_r($array_combined);
echo "<br />";

// Array Keys
$keys = array_keys($array_combined);
print_r($keys);
echo "<br />";

// Array Flipping
$array_flipped = array_flip($array_combined);
print_r($array_flipped);
echo "<br />";

// Array Range
$numbers_to_ten = range(0, 10);
print_r($numbers_to_ten);
echo "<br />";

// Array Map
$numbers_squared = array_map(fn($number) => $number * $number, $numbers_to_ten);
print_r($numbers_squared);
echo "<br />";

// Array Filter
$numbers_over_ten = array_filter($numbers_squared, fn($number) => $number > 10);
print_r($numbers_over_ten);
echo "<br />";

// Array Reduce
$numbers_squared_sum = array_reduce(
  $numbers_squared,
  fn($carry, $number) => $carry + $number
);

print_r($numbers_squared_sum);
echo "<br />";

?>