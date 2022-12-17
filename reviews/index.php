<?php include "./includes/header.php"; ?>

<?php
$id = $reviewer_name = $reviewer_email = $review_body = $method = "";
$reviewer_name_error = $reviewer_email_error = $review_body_error = "";

if (isset($_GET["method"]) and isset($_GET["id"])) {
  if ($_GET["method"] === "update" and $_GET["id"]) {
    $id = $_GET["id"];
    $sql = "SELECT id, reviewer_name, reviewer_email, review_body FROM reviews WHERE (id = $id)";
    $result = mysqli_query($connection, $sql);
    $reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $reviewer_name = $reviews[0]["reviewer_name"];
    $reviewer_email = $reviews[0]["reviewer_email"];
    $review_body = $reviews[0]["review_body"];
    $method = "update";
  }
}

if (isset($_POST["submit"])) {
  if (empty($_POST["reviewer-name"])) {
    $reviewer_name_error = "Reviewer name is required";
  } else {
    $reviewer_name = filter_input(
      INPUT_POST,
      "reviewer-name",
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  if (empty($_POST["reviewer-email"])) {
    $reviewer_email_error = "Reviewer email is required";
  } else {
    $reviewer_email = filter_input(
      INPUT_POST,
      "reviewer-email",
      FILTER_SANITIZE_EMAIL
    );
  }

  if (empty($_POST["review-body"])) {
    $review_body_error = "Review body is required";
  } else {
    $review_body = filter_input(
      INPUT_POST,
      "review-body",
      FILTER_SANITIZE_FULL_SPECIAL_CHARS
    );
  }

  if (
    empty($reviewer_name_error) and
    empty($reviewer_email_error) and
    empty($review_body_error)
  ) {
    if ($_POST["method"] === "update") {
      $id = $_POST["id"];
      $sql =
        "UPDATE reviews SET" .
        " " .
        "reviewer_name = '$reviewer_name', reviewer_email = '$reviewer_email', review_body = '$review_body'" .
        " " .
        "WHERE (id = $id)";
    } else {
      $sql =
        "INSERT INTO reviews" .
        " " .
        "(reviewer_name, reviewer_email, review_body)" .
        " " .
        "VALUES ('$reviewer_name', '$reviewer_email', '$review_body')";
    }

    if (mysqli_query($connection, $sql)) {
      header("Location: ./reviews.php");
    } else {
      echo "Error: " . mysqli_error($connection);
    }
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
          <div class="visually-hidden mb-2">
            <input type="text" name="method" id="method" placeholder="Insert or Update" value="<?= $method
              ? $method
              : null ?>" class="form-control">
          </div>
          <div class="visually-hidden mb-4">
            <input type="text" name="id" id="id" placeholder="Review ID" value="<?= $id
              ? $id
              : null ?>" class="form-control">
          </div>
          <hr class="visually-hidden text-muted mb-3" />
          <div class="mb-3">
            <label for="reviewer-name" class="form-label">Reviewer Name</label>
            <input type="text" name="reviewer-name" id="reviewer-name" placeholder="Eng. Example" value="<?= $reviewer_name
              ? $reviewer_name
              : null ?>" class='<?= "form-control",
  $reviewer_name_error ? " " . "is-invalid" : null ?>' />
            <div class="invalid-feedback">
              <?= $reviewer_name_error ? $reviewer_name_error : null ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="reviewer-email" class="form-label">Reviewer Email</label>
            <input type="email" name="reviewer-email" id="reviewer-email" placeholder="me@example.com" value="<?= $reviewer_email
              ? $reviewer_email
              : null ?>" class='<?= "form-control",
  $reviewer_email_error ? " " . "is-invalid" : null ?>' />
            <div class="invalid-feedback">
              <?= $reviewer_email_error ? $reviewer_email_error : null ?>
            </div>
          </div>
          <div class="mb-3">
            <label for="review-body" class="form-label">Review Body</label>
            <textarea rows="8" name="review-body" id="review-body" placeholder="This course was ..." class='<?= "form-control",
              $review_body_error
                ? " " . "is-invalid"
                : null ?>'><?= $review_body ? $review_body : null ?></textarea>
            <div class="invalid-feedback">
              <?= $review_body_error ? $review_body_error : null ?>
            </div>
          </div>
          <button type="submit" name="submit" class="btn btn-dark">Submit</button>
        </form>
      </div>
    </div>
  </div>
</main>

<?php include "./includes/footer.php"; ?>