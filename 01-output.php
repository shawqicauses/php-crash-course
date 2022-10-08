<?php // This is PHP opening tag
// This is a single line comment
/* This is a multiple line comment */

// echo() - Output strings, numbers, booleans, HTML and so on
// Can take in multiple arguments
echo true, "<br />";
echo 22082003, "<br />";
echo "Shawqi Hatem", "<br />";

// print() - Similar to echo, but it is slower
// Can take in only a single argument
print 22082003;
print "<br />";

// print_r() - Return a bit more information
// Can be used to print arrays and other values
print_r(["D" => 22, "M" => 8, "Y" => 2003]);
print_r("<br />");

// var_dump() - Return more information like data type
// Return length if you used it with strings
var_dump("Shawqi");
echo "<br />";

// var_export() - Similar to var_dump()
// Outputs a string representation of a variable
var_export("Hatem");
echo "<br />";

// Escaping Characters Using Back-slash
// Or you can use single quotes inside double ones
echo "Is your name \"Shawqi\"?", "<br />";
echo "He said \"Do you love PHP?\"";

// This is PHP closing tag which ends PHP code block
// IF there is nothing below it like HTML content and son on
// You can omit it and nothing wrong will happen
?>

<!-- 
  After PHP closing tag
  you can output any HTML code
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE = edge" />
    <meta name="viewport" content="width = device-width, initial-scale = 1.0" />
    <title>Learning PHP</title>
  </head>
  <body>
    <h1>
      <!-- 
        This is PHP echo short-hand
        you may only drop a semi-colon when a statement
        is followed immediately by PHP closing tag
      -->
      <?= "Shawqi Hatem" ?>
    </h1>
  </body>
</html>