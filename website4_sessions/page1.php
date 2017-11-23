<?php 
  if(isset($_POST['submit'])){
    // catch values and put in variables
    // every page should ahve session start
    session_start(); // starts the session

    //superglobal
    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    // re-direct to different page
    header('Location: page2.php');

  } 
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page1</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-default">
  <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Page1</a>
</nav>
  <div class="container">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
<div class="form-group">
  <label for="name">Name</label>
  <input type="text" name="name" class="form-control"  placeholder="Enter name">
</div>
<div class="form-group">
  <label for="email">Password</label>
  <input type="text" name="email" class="form-control"  placeholder="Enter Email">
</div>

<button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
</body>
</html>