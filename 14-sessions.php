<?php

session_start();

if (isset($_POST["submit"])) {
  $username = filter_input(
    INPUT_POST,
    "username",
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = $_POST["password"];

  if (($username === "@shawqicauses") & ($password === "password")) {
    $_SESSION["username"] = $username;
    header("Location: /php-crash-course/extras/dashboard.php"); // Re-direct
  } else {
    echo "In-correct username or password";
  }
}
?>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" />
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>