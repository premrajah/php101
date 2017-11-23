<?php
  if(isset($_POST['submit'])){
    // submit ok
    $username = htmlentities($_POST['username']);

    // set cookie 1 hour
    setcookie('username', $username, time() + 3600);

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
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  </head>

  <body>
    <nav class="navbar navbar-default">
      <a class="navbar-brand" href="<?php echo $_SERVER['PHP_SELF']; ?>">Page1</a>
    </nav>
    <div class="container">
      <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Enter username">
        </div>

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </body>

  </html>