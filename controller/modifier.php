<?php

  if(!empty($_POST["register-btn"])) {
    if(!empty($_POST["name"]) and !empty($_POST["surname"]) and !empty($_POST["birthdate"]) and !empty($_POST["email"])) {
      $id = $_POST["id"];
      $name = $_POST["name"];
      $surname = $_POST["surname"];
      $birthdate = $_POST["birthdate"];
      $email = $_POST["email"];

      $sql = $connection -> query(" update registration set name='$name', surname='$surname', birthdate='$birthdate', email='$email' where id=$id");
      if($sql == 1) {
        header("location:../index.php");
      } else {
      echo '<div class="alert alert-danger">Error while modifying.</div>';
      }

    } else {
      echo '<div class="alert alert-warning">Empty fields.</div>';
    }
  }

?>