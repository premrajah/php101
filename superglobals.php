<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Super Globals</title>
</head>
<body>
  <h1>Super Globals</h1>
  <h2>$_SERVER</h2>
  <?php 
    foreach ($_SERVER as $key => $value) {
      echo $key . ' : ' . $value . '<br>';
    }
  ?>
  <hr>
  <?php
  
  ?>
</body>
</html>