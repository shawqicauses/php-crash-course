<?php include "./includes/header.php"; ?>

<?php
$sql =
  "SELECT id, reviewer_name, reviewer_email, review_body, review_date FROM reviews";
$result = mysqli_query($connection, $sql);
$reviews = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<main class="p-4 px-0 m-4 mx-0">
  <div class="container">
    <div class="row gx-3 gy-3">
      <?php if (empty($reviews)): ?>
      <div class="col-12">
        <p class="alert alert-danger">There is no reviews</p>
      </div>
      <?php endif; ?>
      <?php foreach ($reviews as $review): ?>
      <div class="col-12 col-md-6 col-xl-4">
        <div class="card">
          <div class="card-body">
            <h3 class="card-title text-truncate mb-2">By <?= $review[
              "reviewer_name"
            ] ?></h3>
            <p class="card-subtitle text-decoration-underline text-muted mb-3"><?= $review[
              "reviewer_email"
            ] ?></p>
            <p class="card-text text-muted mb-4"><?= $review[
              "review_body"
            ] ?></p>
            <div class="d-flex justify-content-start align-items-center">
              <a href='<?= "./index.php" .
                "?" .
                "method" .
                "=" .
                "update" .
                "&" .
                "id" .
                "=" .
                $review["id"] ?>' class="btn btn-dark me-2">Update</a>
              <a href='<?= "./delete.php" .
                "?" .
                "id" .
                "=" .
                $review["id"] ?>' class="btn btn-outline-danger">Delete</a>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</main>

<?php include "./includes/footer.php"; ?>