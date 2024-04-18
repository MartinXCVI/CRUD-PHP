<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!--- CDNjs Font Awesome --->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!--- Bootstrap CSS --->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--- CSS Stylesheet --->
  <link rel="stylesheet" href="./css/styles.css">
  <title>CRUD in PHP</title>
</head>
<body>
  <main id="principal">
    <h1 class="text-center">CRUD in PHP</h1>
    <?php
      include "model/connection.php";
      include "controller/delete.php";
    ?>
    <div class="container-fluid row main-wrapper">
      <form class="col-4 p-3" id="form" method="POST">
        <h3 class="text-center text-secondary">Registration</h3>
        <?php
          include "controller/register.php";
        ?>
        <div class="mb-3">
          <label for="name-input" class="form-label">Name: </label>
          <input type="text" class="form-control" name="name" id="name-input">
        </div>
        <div class="mb-3">
          <label for="surname-input" class="form-label">Surname: </label>
          <input type="text" class="form-control" name="surname" id="surname-input">
        </div>
        <div class="mb-3">
          <label for="birthdate-input" class="form-label">Birthdate: </label>
          <input type="date" class="form-control" name="birthdate" id="birthdate-input">
        </div>
        <div class="mb-3">
          <label for="email-input" class="form-label">Email: </label>
          <input type="email" class="form-control" name="email" id="email-input">
        </div>
        <button type="submit" class="btn btn-primary" name="register-btn" id="register-btn" value="ok">Register</button>
      </form>
      <div class="col-8 p-4" id="tables-container">
        <table class="table">
          <thead class="table-head" id="table-head">
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Name</th>
              <th scope="col">Surname</th>
              <th scope="col">Date</th>
              <th scope="col">Email</th>
              <th scopecol="col"></th>
            </tr>
          </thead>
          <tbody>
            <?php
              include "./model/connection.php";

              $sql = $connection -> query(" select * from registration ");
              while($data = $sql -> fetch_object()) {
            ?>
                <tr>
                  <td><?= $data -> id ?></td>
                  <td><?= $data -> name ?></td>
                  <td><?= $data -> surname ?></td>
                  <td><?= $data -> birthdate ?></td>
                  <td><?= $data -> email ?></td>
                  <td>
                    <a href="php/modify.php?id=<?= $data -> id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="index.php?id=<?= $data -> id ?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                  </td>
                </tr>
            
            <?php
              }
            ?>
            
          </tbody>
        </table>
      </div>
    </div>
  </main>

  <!--- Bootstrap script --->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>