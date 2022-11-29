<?php

session_start();

if (isset($_SESSION["username"])) {
  echo "Welcome " . $_SESSION["username"] . " " . "Here is your dashboard";
} else {
  header("Location: ../14-sessions.php");
}
?>

<body>
  <a href="./log-out.php">Log out</a>
</body>