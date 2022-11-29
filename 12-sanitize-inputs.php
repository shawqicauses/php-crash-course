<?php
if (isset($_POST["submit"])) {
  // $name = htmlspecialchars($_POST["name"]);
  // $age = htmlspecialchars($_POST["age"]);
  // $name = filter_var($_POST["name"], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  // $age = filter_var($_POST["age"], FILTER_SANITIZE_NUMBER_INT);
  $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
  $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
  echo $name . " " . $age . "<br />";
} ?>

<body>
  <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" />
    <label for="age">Age:</label>
    <input type="number" name="age" id="age" />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>