<?php

if (isset($_POST["submit"])) {
  $allowed_extensions = ["png", "jpg", "jpeg"];

  if (!empty($_FILES["file"]["name"])) {
    $file_name = $_FILES["file"]["name"];
    $file_size = $_FILES["file"]["size"];
    $file_tmp_name = $_FILES["file"]["tmp_name"];
    $target_directory = "files/" . $file_name;

    // File Extensions
    $file_extension = explode(".", $file_name);
    $file_extension = strtolower(end($file_extension));

    // Validating File Extensions
    if (in_array($file_extension, $allowed_extensions)) {
      if ($file_size <= 1000000) {
        move_uploaded_file($file_tmp_name, $target_directory);
        $message = "<p style=\"color: green\">File uploaded successfully</p>";
        echo $message;
      } else {
        $message = "<p style=\"color: red\">File is so large</p>";
        echo $message;
      }
    } else {
      $message = "<p style=\"color: red\">Please choose a valid extension</p>";
      echo $message;
    }
  } else {
    $message = "<p style=\"color: red\">Please choose a file to upload</p>";
    echo $message;
  }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE = edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <title>File Uploading</title>
</head>

<body>
  <form action="<?php echo $_SERVER[
    "PHP_SELF"
  ]; ?>" method="POST" enctype="multipart/form-data">
    <label for="file">Select image to upload:</label>
    <input type="file" name="file" id="file" />
    <button type="submit" name="submit">Submit</button>
  </form>
</body>

</html>