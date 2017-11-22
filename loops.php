<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Loops</title>
</head>
<body>
  <h1>Loops</h1>
  <?php 
    $people = array("Brad" => "Developer", "Sally" => "Singer", 22, true, 34.4, "Polly");

    $associateArray = array("Mike" => "m@mike.com", "Samson" => "sam@samson.com");

    foreach($people as $person) {
      echo $person;
      echo '<br>';
    }

    foreach($associateArray as $name => $email) {
      echo $name . ' : ' . $email;
      echo '<br>';
    }
  ?>
</body>
</html>