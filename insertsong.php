<?php
  include 'config.php';

  $artist = $_POST['artist'];
  $title = $_POST['title'];

  $sql = "INSERT INTO songs(artist, title) VALUES ('$artist','$title');";
  mysqli_query($conn, $sql);

  header("location:index.php?insertsong=success");
 ?>
