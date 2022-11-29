<?php

function inverse($number)
{
  if (!$number or !$number === 0) {
    throw new Exception("Division By Zero");
  }

  return 1 / $number;
}

try {
  echo inverse(8), "<br />";
  echo inverse(0), "<br />";
} catch (Exception $error) {
  echo "Exception ", $error->getMessage();
  echo "<br />";
} finally {
  echo "Exception doesn't stop every thing after it";
  echo "<br />";
}

?>
