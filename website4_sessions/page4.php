<?php
// every page has to include session_start() for sessions
  session_start();

  // unset one value
  // unset($_SESSION['name']);

  // destroy session
  session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 4</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Page4</a>
</nav>

<div class="container">
  <h1>You have been logged out.</h1>
  <h3>unset($_SESSION)</h3>
  <h3>session_destroy()</h3>

  <br>
<a type="button" class="btn btn-primary" href="index.php">Page1</a>
</div>


</body>
</html>