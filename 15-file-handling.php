<?php

$file = "./extras/users.md";
if (file_exists($file)) {
  // echo readfile($file);
  $handle = fopen($file, "r"); // Parameters: 1. File | 2. Access Type
  $contents = fread($handle, filesize($file)); // Parameters: 1. Resource Type | 2. Reading Byte Numbers
  fclose($handle); // Closing File
  echo $contents; // Printing File's Content
  echo file_get_contents($file); // File's Content w/o Permissions (HACKED!)
} else {
  $handle = fopen($file, "w");
  $contents = "@shawqicauses using PHP itself";
  fwrite($handle, $contents);
  fclose($handle);
  echo $contents;
}

?>
