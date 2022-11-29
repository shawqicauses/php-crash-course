<?php

define("DB_HOST", "localhost");
define("DB_USER", "shawqi");
define("DB_PASSWORD", "123456789");
define("DB_NAME", "php-crash-course");

$connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if ($connection->connect_error) {
  die("Connection Failed " . $connection->connect_error);
}