<?php

include_once("config.php");

$result = mysqli_query($conn, "SELECT * FROM users ORDER BY id DESC");
?>


<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Simple CRUD PHP</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

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
            <a class="nav-link active" href="index.php">Home</a>
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
        <h5>Lista</h5>
      </div>
      <div class="card-body">
        <div class="table-container table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Email</th>
                <th>Actions</th>
              <tr>
            </thead>
            <tbody>
              <?php
              while ($res = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td>" . $res['name'] . "</td>";
                echo "<td>" . $res['age'] . "</td>";
                echo "<td>" . $res['email'] . "</td>";
                echo "<td>
                        <a href=\"edit.php?id=$res[id]\" class=\"btn btn-sm btn-warning\">Edit</a> 
                        <a href=\"delete.php?id=$res[id]\" class=\"btn btn-sm btn-danger\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a>
                      </td>";
                echo "</tr>";
              }
              ?>
            </tbody>
          </table>
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