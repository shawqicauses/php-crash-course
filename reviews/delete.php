<?php
include "./config/database.php";
if (isset($_GET["id"])) {
  $id = $_GET["id"];
  $sql = "DELETE FROM reviews WHERE (id = $id)";
  mysqli_query($connection, $sql);
  header("Location: ./reviews.php");
  exit();
}
?>