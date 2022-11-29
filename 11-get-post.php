<?php

if (isset($_GET["submit"])) {
  echo $_GET["name"], "<br />";
  echo $_GET["age"], "<br />";
}

if (isset($_POST["submit"])) {
  echo $_POST["name"], "<br />";
  echo $_POST["age"], "<br />";
}
?>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>