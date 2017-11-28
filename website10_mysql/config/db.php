<?php 

  // create connection Host| Username | Password | Table Name |
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
  
    if(mysqli_connect_errno()){
      echo '<p class="alert alert-danger">Failed to connect to MySQL DB ' . mysqli_connect_errno() . '</p>';
    } 

?>