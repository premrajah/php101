<?php
  // every page has to have a session start
  session_start(); // start session

  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : ' --- ' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 2</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Page2</a>
</nav>

<div class="container">
<ul class="list-group">
  <li class="list-group-item">Welcome</li>
  <li class="list-group-item"><?php echo "Thank you {$name} "; ?></li>
  <li class="list-group-item"><?php echo "You are subscribed with {$email}"; ?></li>
</ul>

<br>
<a type="button" class="btn btn-primary" href="page3.php">Please go to Page3</a>
</div>
</body>
</html>