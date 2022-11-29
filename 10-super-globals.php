<?php

/*
Super-Globals:
Built-in variables which are always available in PHP scopes

- Super-Globals:
$GLOBALS: A super-global variable which holds information about each variable in global scope
$_GET: Contains information about each variable passed through a URL or a form
$_POST: Contains information about each variable passed through a form
$_COOKIE: Contains information about each variable passed through a cookie
$_SESSION: Contains information about each variable passed through a session
$_SERVER: Contains information about server environment
$_ENV: Contains information about each environment variable
$_REQUEST: Contains information about each variable passed through a URL or a form
*/

echo "Host: " . $_SERVER["HTTP_HOST"] . "<br />";
echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br />";
echo "Server Port: " . $_SERVER["SERVER_PORT"] . "<br />";
echo "Document Root: " . $_SERVER["DOCUMENT_ROOT"] . "<br />";
echo "Request URL: " . $_SERVER["REQUEST_URI"] . "<br />";
echo "Current PHP File: " . $_SERVER["PHP_SELF"] . "<br />";

?>