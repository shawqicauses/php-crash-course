<?php

$string = "Shawqi Hatem";
echo strlen($string), "<br />"; // Returns string's length
echo strpos($string, "a"), "<br />"; // Returns first position of a sub-string
echo strrpos($string, "a"), "<br />"; // Returns last position of a sub-string
echo strrev($string), "<br />"; // Returns a reversed copy of a string
echo strtolower($string), "<br />"; // Lower-case each character of a string
echo strtoupper($string), "<br />"; // Upper-case each character of a string
echo ucwords($string), "<br />"; // Upper-case first character of each word in a string
echo str_replace("Hatem", "", $string), "<br />"; // Replace a sub-string in a string
echo substr($string, 0, 5), "<br />"; // Returns a string with specified subtraction begin and end index
echo substr($string, 7), "<br />"; // Returns a string with specified subtraction begin index
echo str_starts_with($string, "Shawqi"), "<br />"; // Returns true if a string starts with specified sub-string
echo str_ends_with($string, "Hatem"), "<br />"; // Returns true if a string ends with specified sub-string
echo htmlentities("<h1>Shawqi Hatem</h1>"), "<br />"; // Returns HTML tags as a regular string
?>