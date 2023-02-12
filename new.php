<?php

include_once("config.php");

$msg = "";

if (isset($_POST['name'])) {
  $name = mysqli_real_escape_string($conn, $_POST['name']);
  $age = mysqli_real_escape_string($conn, $_POST['age']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);

  // checking empty fields
  if (empty($name) || empty($age) || empty($email)) {

    if (empty($name)) {
      $msg .= "<p class='alert alert-danger'>Name field is empty.</p>";
    }

    if (empty($age)) {
      $msg .= "<p class='alert alert-danger'>Age field is empty.</p>";
    }

    if (empty($email)) {
      $msg .= "<p class='alert alert-danger'>Email field is empty.</p>";
    }

    //link to the previous page
    $msg .= "<p class='alert alert-danger'><a href='javascript:self.history.back();'>Go Back</a></p>";
  } else {
    // if all the fields are filled (not empty) 

    //insert data to database	
    $result = mysqli_query($conn, "INSERT INTO users(name,age,email) VALUES('$name','$age','$email')");

    //display success message
    $msg .= "<p class='alert alert-success'>Data added successfully.</p>";
    $msg .= "<p class='alert alert-success'><a href='index.php'>View Result</a></p>";
  }
}

?>


<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple CRUD PHP</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary">
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
            <a class="nav-link active" href="new.php">New</a>
          </li>
      </div>
    </div>
  </nav>

  <div class="container mt-3">
    <div class="card">
      <div class="card-header">
        <h5>New</h5>
      </div>
      <div class="card-body">
        <?= $msg ?>
        <form method="POST">
          <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" placeholder="Name" required>
          </div>
          <div class="mb-3">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" placeholder="Age" required>
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>