<?php
// every page has to include session_start() for sessions
  session_start();

  
  $name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest' ;
  $email = isset($_SESSION['email']) ? $_SESSION['email'] : ' --- ' ;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 3</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Page3</a>
</nav>

<div class="container">
  <h1><?php echo "Hello {$name}"; ?></h1>
  <h2><?php echo "Your email is {$email}"; ?></h2>
  <p>Session Array: $_SESSION Super global</p>
  <p><?php print_r($_SESSION); ?></p>

  <br>
<a type="button" class="btn btn-primary" href="page4.php">Logout</a>
</div>
</body>
</html>