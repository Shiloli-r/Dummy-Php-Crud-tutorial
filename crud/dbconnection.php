<?php
  $server = "localhost";
  $user = "root";
  $pass = "";


$conn = new  mysqli($server, $user, $pass, "tbt");

  /* Checking to see whether connection to server was successful */
  if ($conn->connect_error) {
    echo $conn->connect_error;
    die("Failed to connect to database ");
  }else {
    echo "Connected to server successfully<br>";
  }

 ?>
