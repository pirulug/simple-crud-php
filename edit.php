<?php

include_once("config.php");

$msg = "";

if (isset($_POST['name'])) {

  $id = mysqli_real_escape_string($conn, $_POST['id']);

  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);


  if (empty($name) || empty($age) || empty($email)) {

    if (empty($name)) {
      $msg .= "<p class=\"alert alert-danger\">Name field is empty.</p><br/>";
    }

    if (empty($age)) {
      $msg .= "<p class=\"alert alert-danger\">Age field is empty.</p><br/>";
    }

    if (empty($email)) {
      $msg .= "<p class=\"alert alert-danger\">Email field is empty.</p><br/>";
    }
  } else {

    $result = mysqli_query($conn, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");

    header("Location: index.php");
  }
}

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");

while ($res = mysqli_fetch_array($result)) {
  $name = $res['name'];
  $age = $res['age'];
  $email = $res['email'];
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">

  <title>Simple CRUD PHP</title>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="index.php">CRUD PHP</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCrudPhp">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCrudPhp">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="new.php">New</a>
          </li>
      </div>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="card">
      <div class="card-header">
        <h5>Edit</h5>
      </div>
      <div class="card-body">
        <?= $msg ?>
        <form method="POST">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" value="<?= $name ?>">
          </div>
          <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" value="<?= $age ?>">
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" value="<?= $email ?>">
          </div>
          <input type="hidden" name="id" value="<?= $_GET['id'] ?>">
          <button type="submit" class="btn btn-primary">Update</button>
        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
      <div class="col-md-4 d-flex align-items-center">
        <a href="/" class="mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1">
          <svg class="bi" width="30" height="24">
            <use xlink:href="#bootstrap"></use>
          </svg>
        </a>
        <span class="mb-3 mb-md-0 text-muted">© 2022 Pirulug</span>
      </div>

      <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
        <li class="ms-3"><a class="text-muted" href="https://github.com/pirulug">Github</a></li>
      </ul>
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>