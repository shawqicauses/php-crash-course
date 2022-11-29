<?php include "./config/database.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE = edge">
  <meta name="viewport" content="width = device-width, initial-scale = 1.0">
  <title>Leave Reviews</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body class="h-100 d-flex flex-column align-items-stretch justify-content-start" style="min-height: 100vh;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="reviews.php">Reviews Application</a>
      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbar-collapse-content"
        aria-label="Toggle Navigation" aria-controls="navbar-collapse-content" aria-expanded="false"
        class="navbar-toggler">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar-collapse-content">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reviews.php">Reviews</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>