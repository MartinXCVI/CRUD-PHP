<?php 

if(!empty($_POST["register-btn"])) {
  if(!empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["birthdate"]) and !empty($_POST["email"])) {
    
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $birthdate = $_POST["birthdate"];
    $email = $_POST["email"];

    $sql = $connection -> query(" INSERT INTO registration(name, surname, birthdate, email) VALUES('$name', '$surname', '$birthdate', '$email')");
    if($sql == 1) {
      echo '<div class="alert alert-success">Successfully registered.</div>';
    } else {
      echo '<div class="alert alert-danger">There has been an error.</div>';
    }

  } else {
    echo '<div class="alert alert-warning">Some of the fields is empty.</div>';
  }
}

?>