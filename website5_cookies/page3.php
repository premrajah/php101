<?php
  // delete cookie -1 hour
  setcookie('username', 'Francis', time() - 3600 );
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 3</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>User Cookie Unset</h1>
<?php
  if(count($_COOKIE) > 0){
    echo "<h1>There are ". count($_COOKIE) . " cookies.</h1>";
  } else {
    echo "<h1>There are no Cookies.</h1>";
  }
?>

<br>
<a href="page4.php" class="btn btn-primary">Page 4</a>
</div>
</body>
</html>