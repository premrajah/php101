<?php
  $user = array(
    'name' => 'Prem Rajah',
    'age' => 35,
    'email' => "test@testing.com"
  );
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Page 4</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
</head>
<body>
<div class="container">
<h1>Array as Cookie</h1>
<?php
  //serialize as string
  $user = serialize($user);
  echo "<h3>serialize(): " . $user['name'] . "</h3>";
  '<h2>' . print_r($user) . '</h2>';
?>
<hr>
<?php
  setcookie('user', $user, time() + 86400 * 30); // 1 day

  //un-serialize
  $user = unserialize($user);
  echo "<h3>unserialize(): " . $user['name'] . "</h3>";
  '<h2>' . print_r($user) . '</h2>';
?>

<br>

<a href="index.php" class="btn btn-primary">Home</a>
</div>
</body>
</html>