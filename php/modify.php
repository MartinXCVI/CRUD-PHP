<?php

  include "../model/connection.php";

  $id = $_GET["id"];
  $sql = $connection -> query(" select * from registration where id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>CRUD in PHP</title>
</head>
<body>
  <main>
  <form class="col-4 p-3 m-auto" id="form" method="POST">
        <h3 class="text-center text-secondary">Modify</h3>
        <input type="hidden" name="id" value="<?= $_GET["id"] ?> ">
        <?php
          include "../controller/modifier.php";
          while($data = $sql -> fetch_object()) {
        ?>
          <div class="mb-3">
            <label for="name-input" class="form-label">Name: </label>
            <input type="text" class="form-control" name="name" id="name-input" value="<?= $data -> name ?>">
          </div>
          <div class="mb-3">
            <label for="surname-input" class="form-label">Surname: </label>
            <input type="text" class="form-control" name="surname" id="surname-input" value="<?= $data -> surname ?>">
          </div>
          <div class="mb-3">
            <label for="birthdate-input" class="form-label">Birthdate: </label>
            <input type="date" class="form-control" name="birthdate" id="birthdate-input" value="<?= $data -> birthdate ?>">
          </div>
          <div class="mb-3">
            <label for="email-input" class="form-label">Email: </label>
            <input type="email" class="form-control" name="email" id="email-input" value="<?= $data -> email ?>">
          </div>
        <?php
          }
        ?>
        
        <button type="submit" class="btn btn-primary" name="register-btn" id="register-btn" value="ok">Modify</button>
      </form>
  </main>
</body>
</html>