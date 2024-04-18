<?php

  if(!empty($_GET["id"])) {
    $id = $_GET["id"];
    $sql = $connection -> query(" delete from registration where id=$id ");
    if($sql == 1) {
      echo '<div class="alert alert-success">Registry successfully deleted.</div>';
    } else {
      echo '<div class="alert alert-danger">Error while deleting.</div>';
    }
  }

?>