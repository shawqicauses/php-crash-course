<?php include "./includes/header.php"; ?>

<?php
$post_title = $post_details = $post_categories = "";

if (isset($_POST["submit"])) {
  $post_title = $_POST["post-title"];
  $post_details = $_POST["post-details"];
  $post_categories = $_POST["post-categories"];
  $sql = "INSERT INTO posts (title, details) VALUES ('$post_title', '$post_details');";

  if (mysqli_query($connection, $sql)) {
    $sub_sql = "";
    foreach ($post_categories as $post_category) {
      $post_id = mysqli_insert_id($connection);
      $sub_sql .= "INSERT INTO posts_categories (post_id, category_id) VALUES ('$post_id', '$post_category');";
    }

    if ($connection->multi_query($sub_sql)) {
      header("Location: ./index.php");
    } else {
      echo "Error: " . mysqli_error($connection);
    }
  } else {
    echo "Error: " . mysqli_error($connection);
  }
}
?>

<main class="p-4 px-0 m-4 mx-0">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8">
        <form action="<?= filter_var(
          $_SERVER["PHP_SELF"],
          FILTER_SANITIZE_FULL_SPECIAL_CHARS
        ) ?>" method="POST">
          <div class="mb-3">
            <label for="post-title" class="form-label">Post Title</label>
            <input type="text" name="post-title" id="post-title" placeholder="Is JavaScript Awesome .."
              class="form-control" />
          </div>
          <div class="mb-3">
            <label for="post-details" class="form-label">Post Details</label>
            <textarea rows="10" name="post-details" id="post-details" placeholder="JavaScript is one of my .."
              class="form-control"></textarea>
          </div>
          <div class="mb-3">
            <label for="post-categories" class="form-label">Post Categories</label>
            <select name="post-categories[]" id="post-categories" class="form-select" multiple>
              <option value="1" selected>HTML</option>
              <option value="2">CSS</option>
              <option value="3">JavaScript</option>
            </select>
          </div>
          <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>


<?php include "./includes/footer.php"; ?>