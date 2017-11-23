<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 2</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
<div class="container">
<?php

  // set and update cookie for a 1 day
  setcookie('username', 'Francis', time() + 86400 * 30 );

  if(count($_COOKIE) > 0){
    echo "<h1>There are ". count($_COOKIE) . " cookies.</h1>";
  } else {
    echo "<h1>There are no Cookies.</h1>";
  }

  // check if coookie set
  if(isset($_COOKIE['username'])){
    echo "<h1>User: " . $_COOKIE['username'] . " is set. </h1>";
  } else {
    echo "<h1>User cookie is not set.</h1>";
  }

  print_r($_COOKIE);
?>
<br>
<a href="page3.php" class="btn btn-primary">Unset Cooke</a>
</div>
</body>
</html>