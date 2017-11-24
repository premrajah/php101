<?php
  
  // connecting to mysql | host | username | password | table name |
  $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

  // check connection for errors
  if(mysqli_connect_errno()){
    // connection failed
    echo "<p class='alert alert-danger'> Failed to connect to MySql. " . mysqli_connect_errno() . "</p>";
  }

?>