<?php 

  // create connection Host| Username | Password | Table Name |
  $connection = mysqli_connect('localhost', 'root', 'xoniz', 'phpblog');
  
    if(mysqli_connect_errno()){
      echo 'Failed to connect to MySQL DB' . mysqli_connect_errno();
    } else {
      
    }

?>